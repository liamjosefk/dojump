<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store() {
        $lead = new Lead();
        $lead->email = request('email');
        $lead->save();
        return back();
    }

}
