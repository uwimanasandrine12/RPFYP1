<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            display: flex;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #222;
            padding-top: 20px;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .sidebar h4 {
            margin-bottom: 20px;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 12px;
            text-decoration: none;
            width: 80%;
            text-align: center;
            border-radius: 5px;
            margin: 5px 0;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background-color: #555;
        }
        .sidebar .btn-success {
            background-color: #28a745;
        }
        .sidebar .btn-danger {
            background-color: #dc3545;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .dashboard-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            width: 80%;
        }
        .dashboard-item {
            background: linear-gradient(135deg, #007bff, #00c6ff);
            padding: 20px;
            margin: 15px;
            border-radius: 10px;
            text-align: center;
            width: 200px;
            color: white;
            font-weight: bold;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            cursor: pointer;
        }
        .dashboard-item:hover {
            transform: scale(1.1);
            box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.3);
        }
        .dashboard-item span {
            font-size: 1.5em;
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
        .animated {
            animation: fadeIn 0.5s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4>Admin Panel</h4>
        <a href="assignSupervisor">Assign Supervisor</a>
        <a href="department">Add Department</a>
        <a href="faculty">Add Faculty</a>
        <a href="campus">Add Campus</a>
        <a href="admindash" class="btn-success">Back</a>
        <a href="adminlogin" class="btn-danger">Logout</a>
    </div>

    <div class="content">
        <h2>Admin Dashboard</h2>
        <div class="dashboard-container">
            <div class="dashboard-item animated">
                Assign Supervisors
                <span id="supervisorCount">0</span>
            </div>
            <div class="dashboard-item animated">
                Departments
                <span id="departmentCount">0</span>
            </div>
            <div class="dashboard-item animated">
                Faculties
                <span id="facultyCount">0</span>
            </div>
            <div class="dashboard-item animated">
                Campuses
                <span id="campusCount">0</span>
            </div>
        </div>
    </div>

    <script>
        function animateCount(id, target) {
            let count = 0;
            const speed = Math.ceil(target / 50);
            const interval = setInterval(() => {
                count += speed;
                if (count >= target) {
                    count = target;
                    clearInterval(interval);
                }
                document.getElementById(id).textContent = count;
            }, 20);
        }

        document.addEventListener("DOMContentLoaded", () => {
            animateCount("supervisorCount", 35);
            animateCount("departmentCount", 12);
            animateCount("facultyCount", 8);
            animateCount("campusCount", 5);
        });
    </script>
</body>
</html>
