<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FeedController extends Controller {


    public function index() {
        $websites = Website::where('id', '=', '1')->get();
        $feeds = Feed::all();
        return view('admin.feed.index', [
            'websites' => $websites,
            'feeds' => $feeds
        ]);
    }

    public function show(Feed $feed) {
        $websites = Website::where('id', '=', '1')->get();
        return view('home/feed-post', [
            'websites' => $websites,
            'feed' => $feed
        ]);
    }

    public function show_admin(Feed $feed) {
        $websites = Website::where('id', '=', '1')->get();
        return view('admin.feed.post', [
            'websites' => $websites,
            'feed' => $feed
        ]);
    }

    public function edit(Feed $feed) {
        $websites = Website::where('id', '=', '1')->get();
        return view('admin.feed.edit', [
            'websites' => $websites,
            'feed' => $feed
        ]);
    }

    public function create() {
        $websites = Website::where('id', '=', '1')->get();
        return view('admin.feed.create', [
            'websites' => $websites
        ]);
    }

    public function store() {
        $inputs = request()->validate([
            'title' => 'required|min:1|max:255',
            'content' => 'required',
            'image' => 'file'
        ]);

        if(request('image')) {
            $inputs['image'] = request('image')->store('feed');
        }

        auth()->user()->feeds()->create($inputs);

        session()->flash('message', $inputs['title'] . ' has been created...');

        return redirect()->route('admin.feed.index');
    }

    public function update(Feed $feed) {
        $inputs['title'] = request('title');
        $feed->title = $inputs['title'];
        $feed->content = request('content');

        if(request('image')) {
            $inputs['image'] = request('image')->store('feed');
            $feed->image = $inputs['image'];
        }
        auth()->user()->feeds()->save($feed);

        session()->flash('message', $inputs['title'] . ' has been updated...');

        return redirect()->route('admin.feed.index');
    }

    public function delete(Feed $feed) {


        $feed->delete();

        Session::flash('message', 'Feed has been deleted');

        return back();
    }



}
