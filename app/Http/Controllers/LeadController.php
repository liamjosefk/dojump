<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Services\MailchimpService;
use Illuminate\Http\Request;

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

        $listId = '651638';  // CHANGE THE  list ID from Mailchimp dashboard

        $response = $this->mailchimp->addToList($request->email, $listId);

        $lead = new Lead();
        $lead->email = request('email');
        $lead->save();
        session()->flash('email-stored', 'You have Registered.');

        if (is_array($response) && isset($response['id'])) {
            return back()->with('success', 'Successfully subscribed!');
        }

        return back()->with('error', 'Failed to subscribe.');
    }


    public function store() {
        $lead = new Lead();
        $lead->email = request('email');
        $lead->save();
        session()->flash('email-stored', 'You have Registered.');
        return back();
    }

}
