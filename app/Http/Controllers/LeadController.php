<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Services\MailchimpService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LeadController extends Controller
{

    protected $mailchimp;

    public function __construct(MailchimpService $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }


    public function index()
    {
        return view('admin.mailchimp.index', [
            'leads' => Lead::all()
        ]);
    }


    public function subscribe(Request $request)
    {
        // Validate email input
        $request->validate(['email' => 'required|email']);

        $listId = '1e8eadf259';  // Your Mailchimp List ID

        try {
            // Prepare the data for Mailchimp
            $data = [
                'email_address' => $request->input('email'),
                'status' => 'subscribed',
            ];

            // Add first_name and last_name if available
            if ($request->has('first_name')) {
                $data['merge_fields']['FNAME'] = $request->input('first_name');
            }
            if ($request->has('last_name')) {
                $data['merge_fields']['LNAME'] = $request->input('last_name');
            }

            // Log the data being sent to Mailchimp
            Log::info('Mailchimp Subscription Request Data:', ['data' => $data]);

            // Attempt to add the email to Mailchimp
            $response = $this->mailchimp->addToList($data, $listId);

            // Log the full response from Mailchimp to inspect its structure
            Log::info('Mailchimp Response:', ['response' => $response]);

            // Check if the Mailchimp API response indicates success (status: 'subscribed')
            if (isset($response->status) && $response->status === 'subscribed') {
                // Store email locally in the database only if Mailchimp subscription was successful
                $lead = new Lead();
                $lead->email = $request->input('email');
                if ($request->has('first_name')) {
                    $lead->first_name = $request->input('first_name');
                }
                if ($request->has('last_name')) {
                    $lead->last_name = $request->input('last_name');
                }
                $lead->save();

                // Flash success message
                session()->flash('email-stored', 'Email Stored');
                return ['status' => 'success', 'message' => 'Successfully Subscribed!'];
            } else {
                // If the response doesn't indicate success, log the error and show failure message
                Log::error('Unexpected Mailchimp Response:', ['response' => $response]);
                return ['status' => 'error', 'message' => 'Failed to subscribe. Please try again.'];
            }

        } catch (\Exception $e) {
            // Log the error for debugging
            $errorMessage = $e->getMessage();
            Log::error('Mailchimp API Exception:', ['error' => $errorMessage]);

            // Check if the error is related to the "Member Exists" issue
            if (strpos($errorMessage, 'Member Exists') !== false) {
                return ['status' => 'info', 'message' => 'You are already subscribed!'];
            }

            // Return a generic error message for other exceptions
            return ['status' => 'error', 'message' => 'Failed to subscribe. Please try again later.'];
        }
    }









    public function store() {
        $lead = new Lead();
        $lead->email = request('email');
        $lead->save();
        session()->flash('email-stored', 'You have Registered.');
        return back();
    }

}
