<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('admin.gallery.index', [
            'images' => Image::all()
        ]);
    }

    public function add_new(Request $request) {

        // Create a new image instance
        $image = new Image();
        $image->alt = $request->input('alt');
        $image->title = $request->input('alt');

        // Handle main image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/gallery', 'public'); // Save image in 'public/images/gallery'
            $image->image = $imagePath;
        }

        // Handle thumbnail image upload
        if ($request->hasFile('image_thumb')) {
            $thumbPath = $request->file('image_thumb')->store('images/gallery/thumbs', 'public'); // Save thumbnail in 'public/images/gallery/thumbs'
            $image->image_thumb = $thumbPath;
        }

        // Save the image record in the database
        $image->save();

        // Redirect or return success message
        return redirect()->route('project.index')->with('success', 'Image uploaded successfully!');
    }


    public function update(Request $request, Image $image) {
        // Validate the inputs
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_thumb' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alt' => 'nullable|string|max:255'
        ]);

        // Handle main image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/gallery', 'public');
            $image->image = $imagePath;
        }

        // Handle thumbnail image upload
        if ($request->hasFile('image_thumb')) {
            $thumbPath = $request->file('image_thumb')->store('images/gallery/thumbs', 'public');
            $image->image_thumb = $thumbPath;
        }

        // Update alt text
        $image->alt = $request->input('alt');

        // Save the updated image data
        $image->save();

        return redirect()->route('project.index')->with('success', 'Image updated successfully!');
    }



}
