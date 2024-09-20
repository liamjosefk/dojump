<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Project;
use App\Models\Review;
use App\Models\Video;
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
        return view('home.portfolio.video', [
            'videos' => Video::latest()->get()
        ]);
    }
    public function reviews_critic()
    {
        return view('home.reviews.critic', [
            'reviews' => Review::where('critic', '=', '1')->where('is_active', '=', '1')->latest()->get()
        ]);
    }
    public function reviews_audience()
    {
        // Fetch the projects with their reviews
        $ahh_project = Project::with('reviews')->findOrFail(3);
        $dizzy_project = Project::with('reviews')->findOrFail(2);
        $tiger_project = Project::with('reviews')->findOrFail(1);
        $general_reviews = Review::whereDoesntHave('projects')->where('critic', '!=', '1')->get();

        return view('home.reviews.audience', [
            'ahh_reviews' => $ahh_project->reviews,
            'dizzy_reviews' => $dizzy_project->reviews,
            'tiger_reviews' => $tiger_project->reviews,
            'gen_reviews' => $general_reviews
        ]);
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
        return view('home.photo-gallery', [
            'images' => Image::latest()->get()
        ]);
    }
}
