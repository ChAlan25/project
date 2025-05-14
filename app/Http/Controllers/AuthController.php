<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index()
    {
        $condition = request('condition', true); // Default to true if not provided
        return view('login', compact('condition'));
    }

    function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        Auth::attempt($request->only('email', 'password'), $request->filled('remember'));
        if (Auth::check()) {
            // Redirect to the index page
            return redirect()->route('index')->with('success', 'Login successful!');
        } else {
            // Redirect back with an error message
            return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
        }

    }

    function register()
    {
        $validation = request()->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
        ]);

        // Create a new user
        $user = User::create($validation);
        Auth::login($user);

        // Redirect to the index page
        return redirect()->route('index')->with('success', 'Registration successful! You are now logged in.');
    }

    function logout(request $request)
    {
        // Logout the user
        Auth::logout();
        // Invalidate the session
        $request->session()->invalidate();
        // Regenerate the session token
        $request->session()->regenerateToken();

        return redirect()->route('index')->with('success', 'You have been logged out.');
    }
}
