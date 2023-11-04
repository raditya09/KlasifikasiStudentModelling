<?php

namespace App\Http\Controllers\Backend; 


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('backend.users-profile');
    }

    public function update(Request $request)
    {
        // Validate the request data (you can add more validation rules)
        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'nim' => 'required',
            'semester' => 'required',
            'angkatan' => 'required',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example for image upload
        ]);

        // Handle profile image upload (if a new image is provided)
        if ($request->hasFile('profile_image')) {
            // Handle image upload and update the user's profile image
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('profile_images'), $imageName);

            // Update the user's profile image in the database
            // Example: Auth::user()->update(['profile_image' => $imageName]);
        }

        // Update other profile fields
        Auth::user()->update([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'nim' => $request->input('nim'),
            'semester' => $request->input('semester'),
            'angkatan' => $request->input('angkatan'),
        ]);

        return redirect('/dashboard')->with('success', 'Profile updated successfully');
    }
}
