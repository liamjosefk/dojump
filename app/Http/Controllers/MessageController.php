<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {
        return view('admin.messages.index');
    }

    public function store() {
        $message = new Message();
        $message->name = request('name');
        $message->email = request('email');
        $message->phone = request('phone');
        $message->subject = request('subject');
        $message->message = request('message');
        $message->save();
        session()->flash('message-sent', 'You message has been sent.');
        return back();
    }

}
