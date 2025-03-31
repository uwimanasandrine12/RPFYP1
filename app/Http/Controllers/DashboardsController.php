<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Project; // Make sure you have this model

class DashboardsController extends Controller
{
    public function studentDashboard()
    {
        // Get the authenticated student (already logged in)
        $student = Auth::guard('student')->user();

        if (!$student) {
            return redirect()->route('login')->with('error', 'You must be logged in');
        }

        // Fetch the supervisor assigned to the student, if any
        $supervisor = $student->supervisor ?? null;

        $projects = Project::where('student_reg_number', $student->student_reg_number)->get();
        // Pass the data to the view
        return view('student.dashboard', compact('student', 'supervisor', 'projects'));
    }
}
