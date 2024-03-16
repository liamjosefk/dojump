<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Website;
use Illuminate\Http\Request;

class AdminsController extends Controller
{

    public function index() {
        $websites = Website::where('id', '=', '1')->get();
        return view('admin.index', [
            'websites' => $websites
        ]);
    }

    public function siteInfo() {
        $websites = Website::where('id', '=', '1')->get();
        return view('admin.dev.site-info', [
            'websites' => $websites
        ]);
    }




}
