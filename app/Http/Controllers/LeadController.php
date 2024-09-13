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


    public function subscribe(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $listId = '9ccc3b942f';  // Replace with your actual Mailchimp List ID

        try {
            // Attempt to add the email to Mailchimp
            $response = $this->mailchimp->addToList($request->email, $listId);

            // Store email locally in the database
            $lead = new Lead();
            $lead->email = $request->email;
            $lead->save();

            // Check if the response indicates success (use `status` field to check for "subscribed")
            if (isset($response->status) && $response->status === 'subscribed') {
                return back()->with('success', 'Successfully subscribed!');
            }

            // Log any unexpected response errors
            Log::error('Mailchimp Error Response: ', ['response' => $response]);

            // Return with error if Mailchimp API fails
            return back()->with('error', 'Failed to subscribe.');

        } catch (\Exception $e) {
            // Check if the error is due to "Member Exists"
            if (strpos($e->getMessage(), 'Member Exists') !== false) {
                // Return a custom response for already subscribed users
                return back()->with('info', 'You are already subscribed!');
            }

            // Log the exact error message for debugging
            Log::error('Mailchimp API Exception: ', ['error' => $e->getMessage()]);

            // Return with generic error message
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
