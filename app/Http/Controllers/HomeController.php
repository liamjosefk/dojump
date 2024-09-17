<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.home');
    }
    public function on_stage()
    {
        return view('home.on-stage');
    }
    public function services_directing()
    {
        return view('home.services.directing');
    }
    public function services_corporate()
    {
        return view('home.services.corporate-events');
    }
    public function portfolio_stage()
    {
        return view('home.portfolio.stage', [
            'projects' => Project::latest()->get()
        ]);
    }
    public function portfolio_photo()
    {
        return view('home.portfolio.photo');
    }
    public function portfolio_video()
    {
        return view('home.portfolio.video');
    }
    public function reviews_critic()
    {
        return view('home.reviews.critic');
    }
    public function reviews_audience()
    {
        return view('home.reviews.audience');
    }
    public function donate()
    {
        return view('home.donate');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function that_happened()
    {
        return view('home.that-happened');
    }
    public function photo_gallery()
    {
        return view('home.photo-gallery');
    }
}
