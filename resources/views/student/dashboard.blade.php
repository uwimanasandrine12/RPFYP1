<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            min-height: 100vh;
            transition: all 0.3s ease-in-out;
        }

        h1, h2, h3, h4 {
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            padding: 20px;
            position: fixed;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            animation: slideIn 0.5s ease-out;
        }

        .sidebar h4 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .sidebar a {
            color: white;
            padding: 10px;
            width: 100%;
            text-align: center;
            border: 1px solid #495057;
            margin-bottom: 10px;
            transition: background-color 0.3s;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background-color: #495057;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .sidebar form {
            width: 100%;
            margin-top: 20px;
        }

        /* Main Content Styles */
        .content {
            margin-left: 270px;
            padding: 20px;
            width: 100%;
            animation: fadeIn 1s ease-out;
        }

        .content h2 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .alert {
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
            transition: opacity 0.5s ease-out;
        }

        .alert-success {
            background-color: #28a745;
            color: white;
        }

        .alert-danger {
            background-color: #dc3545;
            color: white;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #2c3e50;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #2c3e50;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s ease-out;
            display: inline-flex;
            align-items: center;
        }

        .btn-primary {
            background-color: #2c3e50;
            color: white;
        }

        .btn-primary:hover {
            background-color: #34495e;
            transform: scale(1.05);
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
            transform: scale(1.05);
        }

        .btn-warning {
            background-color: #ffc107;
            color: black;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            transform: scale(1.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
            transition: background-color 0.3s;
        }

        table th {
            background-color: #2c3e50;
            color: white;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        /* Animations */
        @keyframes slideIn {
            from {
                transform: translateX(-250px);
            }
            to {
                transform: translateX(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Button Icon Styles */
        .btn i {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <!-- Sidebar Navigation -->
    <div class="sidebar">
        <h4>Student Dashboard</h4>
        <a href="#">Home</a>
        <a href="{{ route('projects.create') }}">Submit Proposal</a>
        <a href="#">Submitted projects</a>
        <form action="{{ route('student.logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger w-100">Logout</button>
        </form>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h2>Welcome, {{ $student->student_first_name }} {{ $student->student_last_name }}</h2>

        <!-- Flash Messages -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif

        <!-- Search Projects -->
        <div class="form-group">
            <label for="search">Search Projects</label>
            <form action="{{ route('projects.search') }}" method="GET" class="d-flex">
                <input type="text" name="q" id="search" placeholder="Search by project name or keyword" class="form-control me-2">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <!-- Assigned Supervisor -->
        @if($supervisor)
            <h4>Your Supervisor</h4>
            <p>Name: {{ $supervisor->supervisor_first_name }} {{ $supervisor->supervisor_last_name }}</p>
            <p>Email: {{ $supervisor->supervisor_email }}</p>
            <p>Phone: {{ $supervisor->supervisor_phone_number }}</p>
        @else
            <p>No supervisor assigned yet.</p>
        @endif

        <!-- Manage Projects Table -->
        <h4>Your Projects</h4>
        <table>
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
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projects as $project)
                    <tr>
                        <td>{{ $project->project_code }}</td>
                        <td>{{ $project->project_name }}</td>
                        <td>{{ $project->department->department_name }}</td>
                        <td>{{ $project->project_problems }}</td>
                        <td>{{ $project->project_solutions }}</td>
                        <td>{{ Str::limit($project->project_abstract, 50) }}</td>
                        <td>{{ $project->project_dissertation }}</td>
                        <td><a href="{{ $project->project_source_codes }}" target="_blank">View Code</a></td>
                        <td>
                            <a href="{{ route('projects.edit', $project->project_code) }}" class="btn btn-warning btn-sm">
                                <i>✏️</i>Edit
                            </a>
                            <form action="{{ route('projects.destroy', $project->project_code) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                    <i>🗑️</i>Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="9">No projects submitted yet.</td></tr>
                @endforelse
            </tbody>
        </table>

    </div>
</body>
</html>
