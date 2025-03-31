<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Show the admin login page.
     */
    public function showLoginForm()
    {
        return view('adminlogin'); // Make sure this file exists in resources/views
    }

    /**
     * Handle admin login verification.
     */
    public function login(Request $request)
    {
        // Validate input fields
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Fetch admin from database by email
        $admin = Admin::where('email', $request->email)->first();

        // Check if admin exists and compare plain text password
        if ($admin && $request->password === $admin->password) {
            // Store admin session
            Session::put('admin_id', $admin->id);
            Session::put('admin_name', $admin->name);

            // Redirect to dashboard
            return redirect('/admindash')->with('success', 'Welcome, Admin!');
        }

        // If login fails, redirect back with an error message
        return back()->with('error', 'Invalid email or password');
    }

    /**
     * Admin dashboard (accessible only if logged in).
     */
    public function dashboard()
    {
        if (!Session::has('admin_id')) {
            return redirect('/adminlogin')->with('error', 'Please log in first');
        }

        return view('admindash'); // Ensure this view exists
    }

    /**
     * Admin logout.
     */
    public function logout()
    {
        Session::forget('admin_id');
        Session::forget('admin_name');

        return redirect('/adminlogin')->with('success', 'Logged out successfully');
    }

    
}

