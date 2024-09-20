<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index', [
            'users' => User::latest()->get()
        ]);
    }
    public function store(Request $request)
    {
        try {
            // Log the incoming request data (excluding sensitive data like passwords)
            Log::info('User creation request received', [
                'name' => $request->name,
                'email' => $request->email,
            ]);

            // Validate the form data
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            // Log validation success
            Log::info('User validation passed', $validated);

            // Create a new user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password), // Hash the password before saving
            ]);

            // Log successful user creation
            Log::info('User created successfully', ['user_id' => $user->id]);

            // Redirect or show success message
            return redirect()->route('user.index')->with('success', 'User created successfully!');
        } catch (\Exception $e) {
            // Log the exception
            Log::error('Error creating user', [
                'error_message' => $e->getMessage(),
                'request_data' => $request->all()
            ]);

            // Optionally, return an error message to the user
            return redirect()->back()->withErrors('User creation failed. Please try again.');
        }
    }

    public function edit(Request $request)
    {
        // Get the currently authenticated user
        $user = auth()->user();

        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,  // Exclude the current user's email from uniqueness check
            'password' => 'nullable|string|min:8|confirmed',  // Password fields are optional
        ]);

        // Update user's name and email
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // Only update the password if a new one is provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Save the updated user data
        $user->save();

        // Return back with success message
        return back()->with('success', 'Profile updated successfully!');
    }



}
