<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('auth.student_login');
    }

    // Handle student login
    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'student_reg_number' => 'required|string',  // Ensure student registration number is provided
            'password' => 'required|string|min:6',
        ]);

        // Attempt to find the student by registration number
        $student = Student::where('student_reg_number', $request->input('student_reg_number'))->first();

        if ($student && Hash::check($request->input('password'), $student->password)) {
            // Log the student in using the student guard
            Auth::guard('student')->login($student);

            // Redirect to student dashboard or home page after successful login
            return redirect()->route('student.dashboard');
        }

        // If login fails, redirect back with an error message
        return redirect()->back()->withErrors(['message' => 'Invalid login credentials']);
    }

    // Handle student logout
    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect()->route('student.login');  // Redirect to login page after logout
    }
}
