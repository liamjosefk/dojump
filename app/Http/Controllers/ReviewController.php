<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{
    public function index()
    {
        return view('admin.reviews.index', [
            'reviews' => Review::where('is_active', '=', '1')->get(),
            'projects' => Project::where('is_active', '=', '1')->get()
        ]);
    }

    public function add_new(Request $request) {
        // Validation
        $validated = $request->validate([
            'author' => 'nullable|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'critic' => 'required|boolean'
        ]);

        try {
            // Log the incoming request (excluding sensitive data)
            Log::info('Adding a new review', $request->only('author', 'title', 'critic'));

            // Create the review
            $review = new Review();
            $review->author = $request->input('author') ?? 'Anonymous';
            $review->title = $request->input('title');
            $review->content = $request->input('content'); // Updated to match the form field
            $review->link = $request->input('link');
            $review->critic = $request->input('critic');

            // Handle image upload
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images/reviews', 'public');
                $review->image = $imagePath;
            }

            // Save the review
            $review->save();

            // Log success
            Log::info('Review added successfully', ['review_id' => $review->id]);

            return redirect()->route('review.index')->with('success', 'Review Successfully Added!');
        } catch (\Exception $e) {
            // Log error
            Log::error('Error adding review', ['error' => $e->getMessage()]);

            return redirect()->back()->withErrors('Failed to add review. Please try again.');
        }
    }

    public function edit(Request $request, Review $review)
    {
        // Validation
        $validated = $request->validate([
            'author' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'critic' => 'required|boolean'
        ]);

        try {
            // Log the review update request (excluding sensitive data)
            Log::info('Updating review', ['review_id' => $review->id, 'author' => $request->input('author'), 'title' => $request->input('title'), 'critic' => $request->input('critic')]);

            // Update the review details
            $review->author = $request->input('author');
            $review->title = $request->input('title');
            $review->content = $request->input('content'); // Ensure field matches form input name
            $review->link = $request->input('link');
            $review->critic = $request->input('critic');

            // Handle image upload (replace existing image if a new one is uploaded)
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images/reviews', 'public');
                $review->image = $imagePath;
            }

            // Save the updated review
            $review->save();

            // Log success
            Log::info('Review updated successfully', ['review_id' => $review->id]);

            return redirect()->route('review.index')->with('success', 'Review Successfully Updated!');
        } catch (\Exception $e) {
            // Log error
            Log::error('Error updating review', ['error' => $e->getMessage(), 'review_id' => $review->id]);

            return redirect()->back()->withErrors('Failed to update review. Please try again.');
        }
    }

    public function attach_project(Request $request, Review $review)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'project' => 'required|integer',
        ]);

        // Detach the review from any previous projects
        $review->projects()->detach();

        // Attach the review to a project, unless "General Review" (id = 0) is selected
        if ($request->project != 0) {
            $review->projects()->attach($request->project);
        }

        // Return back with success message
        return redirect()->route('review.index')->with('success', 'Review updated successfully!');
    }



}
