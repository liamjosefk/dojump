<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LeadController;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MessageController extends Controller
{

    public function index()
    {
        return view('admin.messages.index');
    }

    protected $leadController;

    public function __construct(LeadController $leadController)
    {
        $this->leadController = $leadController;
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Combine first and last name
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');

        // Create and save the message
        $message = new Message();
        $message->name = $first_name . ' ' . $last_name; // Store combined name
        $message->email = $request->input('email');
        $message->phone = $request->input('phone');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');
        $message->save();

        // Check if the user opted to subscribe to the newsletter
        if ($request->has('subscribe')) {
            // Use the injected LeadController to call the subscribe method
            try {
                $leadController = new LeadController();
                $subscribeRequest = new Request([
                    'email' => $request->input('email'),
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                ]);

                // Call the subscribe method with the new request
                $subscribeResponse = $leadController->subscribe($subscribeRequest);
                Log::info('Subscription Response:', ['response' => $subscribeResponse]);
            } catch (\Exception $e) {
                Log::error('Subscription Failed:', ['error' => $e->getMessage()]);
            }
        }

        // Flash message to show the message was sent
        session()->flash('message-sent', 'Your message has been sent.');

        // Redirect back with success message
        return back();
    }


}
