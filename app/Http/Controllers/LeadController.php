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

        $listId = '1e8eadf259';  // Your Mailchimp List ID

        try {
            // Attempt to add the email to Mailchimp
            $response = $this->mailchimp->addToList($request->email, $listId);

            // Log the full response to understand its structure
            Log::info('Mailchimp Response: ', ['response' => $response]);

            // Store email locally in the database
            $lead = new Lead();
            $lead->email = $request->email;
            $lead->save();
            session()->flash('email-stored', 'Email Stored');

            // Check if the response indicates success
            if (isset($response->status) && $response->status === 'subscribed') {
                return back()->with('success', 'Successfully subscribed!');
            }

            // If the response doesn't have the expected status, log it
            Log::error('Unexpected Mailchimp Response: ', ['response' => $response]);

            return back()->with('error', 'Failed to subscribe.');

        } catch (\Exception $e) {
            // Check if the error is due to "Member Exists"
            $errorMessage = $e->getMessage();
            Log::error('Mailchimp API Exception: ', ['error' => $errorMessage]);

            if (strpos($errorMessage, 'Member Exists') !== false) {
                return back()->with('info', 'You are already subscribed!');
            }

            // Return with generic error message for other exceptions
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
