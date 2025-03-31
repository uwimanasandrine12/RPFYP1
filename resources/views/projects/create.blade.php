<!DOCTYPE html>
<html lang="en">
<head>
    <title>Submit Project Proposal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 400px;
            opacity: 0;
            transform: scale(0.9);
            animation: fadeIn 0.5s forwards, popIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        @keyframes popIn {
            0% {
                transform: scale(0.9);
            }
            100% {
                transform: scale(1);
            }
        }

        h2 {
            text-align: center;
            color: #333;
            font-size: 18px;
            margin-bottom: 8px;
        }

        label {
            font-weight: bold;
            color: #555;
            font-size: 12px;
        }

        input, textarea, select {
            width: 100%;
            padding: 5px;
            margin-top: 3px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 12px;
        }

        button {
            width: 100%;
            padding: 8px;
            background: #007BFF;
            border: none;
            color: white;
            font-size: 14px;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Submit Project Proposal</h2>
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <label for="project_code">Project Code</label>
            <input type="text" id="project_code" name="project_code" required>
            
            <label for="project_name">Project Name</label>
            <input type="text" id="project_name" name="project_name" required>

            <label for="project_problems">Project Problems</label>
            <textarea id="project_problems" name="project_problems" required></textarea>

            <label for="project_solutions">Project Solutions</label>
            <textarea id="project_solutions" name="project_solutions" required></textarea>

            <label for="project_abstract">Project Abstract</label>
            <textarea id="project_abstract" name="project_abstract" required></textarea>

            <label for="project_dissertation">Project Dissertation</label>
            <textarea id="project_dissertation" name="project_dissertation" required></textarea>

            <label for="project_source_codes">Project Source Codes</label>
            <input type="text" id="project_source_codes" name="project_source_codes" required>

            <label for="department_code">Department</label>
            <select id="department_code" name="department_code" required>
                <option value="">Select Department</option>
                @foreach($departments as $department)
                    <option value="{{ $department->department_code }}">{{ $department->department_name }}</option>
                @endforeach
            </select>

            <label for="student_reg_number">Student Registration Number</label>
            <select id="student_reg_number" name="student_reg_number" required>
                <option value="">Select Student</option>
                @foreach($students as $student)
                    <option value="{{ $student->student_reg_number }}">{{ $student->student_reg_number }}</option>
                @endforeach
            </select>

            <button type="submit">Submit Proposal</button>
        </form>
    </div>
</body>
</html>