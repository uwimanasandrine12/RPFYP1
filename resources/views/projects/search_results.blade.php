<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

<h2>Search Results for "{{ $query }}"</h2>

@if($projects->isEmpty())
    <p class="alert alert-warning">No projects found matching "{{ $query }}".</p>
@else
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Project Code</th>
                <th>Project Name</th>
                <th>Department</th>
                <th>Problems</th>
                <th>Solutions</th>
                <th>Abstract</th>
                <th>Dissertation</th>
                <th>Source Codes</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->project_code }}</td>
                    <td>{{ $project->project_name }}</td>
                    <td>{{ $project->department->department_name }}</td>
                    <td>{{ $project->project_problems }}</td>
                    <td>{{ $project->project_solutions }}</td>
                    <td>{{ Str::limit($project->project_abstract, 50) }}</td>
                    <td>{{ $project->project_dissertation }}</td>
                    <td><a href="{{ $project->project_source_codes }}" target="_blank">{{ $project->project_source_codes }}</a></td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

<a href="{{ route('student.dashboard') }}" class="btn btn-secondary">Back to Dashboard</a>

</body>
</html>
