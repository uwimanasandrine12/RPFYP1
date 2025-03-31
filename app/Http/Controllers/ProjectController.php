<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Project;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display the form to create a new project.
     */
    public function dashboard() {
        $projects = Project::all(); // Fetch all projects from the database
        return view('admindash', compact('projects'));
    }
    public function create()
    {
        $projects = project::all();
        $departments = Department::all();
        $students = Student::all();             
        return view('projects.create', compact('departments', 'students', 'projects'));
    }

    /**
     * Search projects based on project name, code, abstract, or problems.
     */
    public function search(Request $request)
    {
        $query = $request->input('q');

        $projects = Project::where('project_name', 'like', "%{$query}%")
            ->orWhere('project_code', 'like', "%{$query}%")
            ->get();

        return view('projects.search_results', compact('projects', 'query'));
    }

    /**
     * Store the submitted project proposal.
     */
    public function store(Request $request)
    {
        $request->validate([
            'project_code' => 'required|string|unique:projects,project_code',
            'project_name' => 'required|string|max:255',
            'project_problems' => 'required|string',
            'project_solutions' => 'required|string',
            'project_abstract' => 'required|string',
            'project_dissertation' => 'required|string',
            'project_source_codes' => 'required|string',
            'department_code' => 'required|exists:departments,department_code',
            'student_reg_number' => 'required|exists:students,student_reg_number',
        ]);

        Project::create($request->all());

        return redirect()->route('student.dashboard')->with('success', 'Project proposal submitted successfully!');
    }

    /**
     * Display the form to edit a project.
     */
    public function edit($project_code)
    {
        $project = Project::where('project_code', $project_code)->first();

        if (!$project) {
            return redirect()->route('student.dashboard')->withErrors(['message' => 'Project not found']);
        }

        return view('projects.edit', compact('project'));
    }

    /**
     * Update the project details.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'project_name' => 'required|string|max:255',
            'project_problems' => 'required|string',
            'project_solutions' => 'required|string',
            'project_abstract' => 'required|string',
            'project_dissertation' => 'required|string',
            'project_source_codes' => 'nullable|url',
        ]);

        $project->update($validated);

        return redirect()->route('student.dashboard')->with('success', 'Project updated successfully!');
    }

    /**
     * Delete a project.
     */
    public function destroy($project_code)
    {
        $project = Project::where('project_code', $project_code)->first();

        if (!$project) {
            return redirect()->route('student.dashboard')->withErrors(['message' => 'Project not found']);
        }

        $project->delete();

        return redirect()->route('student.dashboard')->with('success', 'Project deleted successfully');
    }
}
