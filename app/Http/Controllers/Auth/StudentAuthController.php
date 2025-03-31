<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class StudentAuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login request
    public function login(Request $request)
    {
        $request->validate([
            'student_reg_number' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('student')->attempt($request->only('student_reg_number', 'password'))) {
            return redirect()->route('student.dashboard');
        }

        return back()->withErrors(['student_reg_number' => 'Invalid Registration Number or Password']);
    }

    // Show registration form
    public function showRegistrationForm()
    {
        return view('auth.student-register');
    }

    // Handle registration request
    public function register(Request $request)
    {
        $request->validate([
            'student_reg_number' => 'required|unique:students',
            'student_first_name' => 'required',
            'student_last_name' => 'required',
            'student_gender' => 'required',
            'student_email' => 'required|email|unique:students',
            'student_phone_number' => 'required|unique:students',
            'password' => 'required|confirmed|min:6',
        ]);

        $student = Student::create([
            'student_reg_number' => $request->student_reg_number,
            'student_first_name' => $request->student_first_name,
            'student_last_name' => $request->student_last_name,
            'student_gender' => $request->student_gender,
            'student_email' => $request->student_email,
            'student_phone_number' => $request->student_phone_number,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($student);

        return redirect()->route('student.dashboard');
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('student.login');
    }
}
?>  
