<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user(); // Get the authenticated user
        return view('profile.editprofile', compact('user'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phonenumber' => 'nullable|string|max:12',
            'city' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'zipcode' => 'nullable|string|max:10',
            'description' => 'nullable|string|max:1000',
        ]);

        // dd("success");

        $user = Auth::user();
        $user->first_name = $request->firstname;
        $user->last_name = $request->lastname;
        $user->phone_number = $request->phonenumber;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->zip_code = $request->zipcode;
        $user->description = $request->description;

        if ($user->save()) {
            return redirect()->route('editprofile')->with('success', 'Profile updated successfully.');
        } else {
            return redirect()->route('editprofile')->with('error', 'Failed to update profile. Please try again.');
        }
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', function ($attribute, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    $fail('The current password is incorrect.');
                }
            }],
            'new_password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('success', 'Password updated successfully!');
    }

    public function deleteAccount(Request $request)
    {
        $request->validate([
            'delete_password' => 'required',
        ]);

        $user = Auth::user();
        
        // Verify password
        if (!Hash::check($request->delete_password, $user->password)) {
            return back()->withErrors([
                'delete_password' => 'The password you entered is incorrect.',
            ]);
        }

        // Store the user to delete
        $userToDelete = $user;

        // First logout the user
        Auth::logout();
        
        // Clear the session
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        // Delete the user
        $userToDelete->delete();

        // Redirect to login page with message
        return redirect()->route('login')->with('success', 'Your account has been successfully deleted. Thank you for using our service.');
    }
}
