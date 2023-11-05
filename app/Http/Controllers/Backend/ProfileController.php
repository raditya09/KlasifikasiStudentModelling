<?php

namespace App\Http\Controllers\Backend; 


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('profile_images'), $imageName);

        }

        Auth::user()->update([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'nim' => $request->input('nim'),
            'semester' => $request->input('semester'),
            'angkatan' => $request->input('angkatan'),
        ]);

        return redirect('/dashboard')->with('success', 'Profile updated successfully');
    }

    public function changePassword(Request $request){
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ], [
            'new_password.min' => 'Password tidak boleh kurang dari 8 karakter',
        ]);

        $user = Auth::user();

        // Verify the current password using the fully qualified namespace
        if (!\Illuminate\Support\Facades\Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect');
        }

        // Update the password
        $user->password = \Illuminate\Support\Facades\Hash::make($request->input('new_password'));
        $user->save();

        return redirect()->back()->with('success', 'Password changed successfully');
    }

}
