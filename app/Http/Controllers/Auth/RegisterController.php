<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'phonenumber' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'zipcode' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Create a new user instance and save it to the database
        $user = User::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'student',
            'phone_number' => $request->phonenumber,
            'city' => $request->city,
            'country' => $request->country,
            'zip_code' => $request->zipcode,
            'description' => $request->description,
        ]);

        // Redirect or return response
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
}