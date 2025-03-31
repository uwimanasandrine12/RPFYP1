<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show the student dashboard
    public function dashboard()
    {
        // Simply return the dashboard view
        return view('student.dashboard');
    }
}
