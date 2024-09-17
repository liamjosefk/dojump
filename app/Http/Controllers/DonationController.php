<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{

    public function index()
    {
        return view('admin.donations.index', [
            'donations' => Donation::where('is_active', '=', '1')->get()
        ]);
    }


    public function store() {
        $donation = new Donation();
        $donation->name = request('name');
        $donation->email = request('email');
        $donation->phone = request('phone');
        $donation->donation = request('donation');
        $donation->message = request('message');
        $donation->save();
        session()->flash('message-sent', 'You Donation has been sent.');
        return back();
    }

    public function archive(Donation $donation) {
        $donation->update([
            'is_active' => request('is_active'),
        ]);

        return back();
    }


}
