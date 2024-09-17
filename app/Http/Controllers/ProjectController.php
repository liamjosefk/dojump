<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        // Fetch combined data including the 'image' field
        $projects = DB::table('projects')
            ->select('title', 'description', 'image', 'id', 'link', DB::raw("'Stage' as type")); // Add 'image'

        $videos = DB::table('videos')
            ->select('title', 'description', 'image', 'id', 'link', DB::raw("'Video' as type")); // Add 'image'

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
            $imagePath = $request->file('image')->store('project-images', 'public'); // Save image in 'public/images'
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

    public function update_stage(Request $request, Project $project)
    {
        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // Update the project details
        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/project-images', 'public'); // Save image in 'public/images'
            $project->image = $imagePath;
            $project->save(); // Save after updating image
        }

        return back()->with('success', 'Project updated successfully!');
    }

    public function update_video(Request $request, Video $video)
    {
        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'required|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // Update the video details
        $video->update([
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/video-images', 'public'); // Save image in 'public/images/video-images'
            $video->image = $imagePath;
            $video->save(); // Save after updating image
        }

        return back()->with('success', 'Video updated successfully!');
    }






}
