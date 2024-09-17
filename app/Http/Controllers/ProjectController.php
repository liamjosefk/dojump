<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        // Fetch combined data
        $projects = DB::table('projects')
            ->select('title', 'description', DB::raw("'Stage' as type"));

        $videos = DB::table('videos')
            ->select('title', 'description', DB::raw("'Video' as type"));

        $combined = $projects->union($videos)->get();

        return view('admin.projects.index', [
            'combinedData' => $combined
        ]);
    }
    public function add_stage(Request $request)
    {
        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'nullable|url', // Validate if link is provided, ensure it's a valid URL
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' // Image is required
        ]);

        // Create a new Project entry
        $project = new Project();
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->link = $request->input('link');

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Save image in 'public/images'
            $project->image = $imagePath;
        }

        // Save the project
        $project->save();

        // Flash a success message
        return redirect()->route('project.index')->with('success', 'Stage project added successfully!');
    }


    public function add_video(Request $request)
    {
        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|url', // Ensure it's a valid URL
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048' // Validate image
        ]);

        // Create a new Project entry (assuming 'projects' is the correct table)
        $project = new Project();
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->link = $request->input('link');

        // Handle image upload, if exists
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/project-images', 'public'); // Save image in 'public/images'
            $project->image = $imagePath;
        }

        // Save the project
        $project->save();

        // Flash a success message
        return redirect()->route('project.index')->with('success', 'Video added successfully!');
    }




}
