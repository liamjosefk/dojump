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
            // Attempt to add the email to Mailchimp
            $response = $this->mailchimp->addToList($request->email, $listId);

            // Log the full response from Mailchimp to inspect its structure
            Log::info('Mailchimp Response: ', ['response' => $response]);

            // Check if the Mailchimp API response indicates success (status: 'subscribed')
            if (isset($response->status) && $response->status === 'subscribed') {

                // Store email locally in the database only if Mailchimp subscription was successful
                $lead = new Lead();
                $lead->email = $request->email;
                if ($request->first_name) {
                    $lead->first_name = $request->first_name;
                }
                if ($request->last_name) {
                    $lead->last_name = $request->last_name;
                }
                $lead->save();

                // Flash success message
                session()->flash('email-stored', 'Email Stored');
                return back()->with('success', 'Successfully Subscribed!');

            } else {
                // If the response doesn't indicate success, log the error and show failure message
                Log::error('Unexpected Mailchimp Response: ', ['response' => $response]);
                return back()->with('error', 'Failed to subscribe. Please try again.');
            }

        } catch (\Exception $e) {
            // Log the error for debugging
            $errorMessage = $e->getMessage();
            Log::error('Mailchimp API Exception: ', ['error' => $errorMessage]);

            // Check if the error is related to the "Member Exists" issue
            if (strpos($errorMessage, 'Member Exists') !== false) {
                return back()->with('info', 'You are already subscribed!');
            }

            // Return a generic error message for other exceptions
            return back()->with('error', 'Failed to subscribe. Please try again later.');
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
