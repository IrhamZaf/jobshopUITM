<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
