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

        $listId = '9ccc3b942f';  // Your Mailchimp list ID

        try {
            // Attempt to add the email to Mailchimp
            $response = $this->mailchimp->addToList($request->email, $listId);

            // Store email locally in the database
            $lead = new Lead();
            $lead->email = $request->email;
            $lead->save();
            session()->flash('email-stored', 'Email Stored');

            // Check if the response indicates success
            if (is_array($response) && isset($response['id'])) {
                return back()->with('success', 'Successfully subscribed!');
            }

            // Log the response to check what went wrong
            Log::error('Mailchimp Error Response: ', ['response' => $response]);

            // Return with error if Mailchimp API fails
            return back()->with('error', 'Failed to subscribe.');

        } catch (\Exception $e) {
            // Log the exact error message for debugging
            Log::error('Mailchimp API Exception: ', ['error' => $e->getMessage()]);

            // Return with error message
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
