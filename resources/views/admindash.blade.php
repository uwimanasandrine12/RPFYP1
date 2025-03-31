<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #222;
            color: #f1f1f1;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
            color: #4c9bdb;
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            color: #d1e7f0;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #333;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar .brand {
            font-size: 1.8rem;
            color: #4c9bdb;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        .navbar .brand:hover {
            color: #d1e7f0;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navbar ul li {
            margin-left: 20px;
        }

        .navbar ul li a {
            color: #f1f1f1;
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }

        .navbar ul li a:hover {
            color: #d1e7f0;
        }

        /* Jumbotron Section */
        .jumbotron {
            background-color: #444;
            padding: 60px 40px;
            margin: 40px 0;
            border-radius: 10px;
            text-align: center;
            animation: fadeIn 1s ease-out;
        }

        .jumbotron h1 {
            font-size: 3rem;
            font-weight: 700;
            color: #4c9bdb;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .jumbotron p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: #4c9bdb;
            padding: 15px 30px;
            font-size: 1.1rem;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1px;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #3578a5;
        }

        /* Feature Section */
        .feature-section {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 40px 0;
        }

        .feature-box {
            background-color: #333;
            padding: 30px;
            border-radius: 8px;
            width: 30%;
            margin-bottom: 20px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: slideIn 1s ease-out;
        }

        .feature-box i {
            font-size: 3rem;
            color: #4c9bdb;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .feature-box i:hover {
            transform: scale(1.1);
        }

        .feature-box h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
        }

        .feature-box p {
            font-size: 1.2rem;
            color: #bbb;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .feature-box {
                width: 45%;
            }
        }

        @media (max-width: 480px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar ul {
                flex-direction: column;
                margin-top: 10px;
            }

            .feature-box {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="brand">Admin Dashboard</div>
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="admin">Manage</a></li>
            <li><a href="{{ url('/adminlogout') }}">Logout</a></li>
        </ul>
    </div>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1>Welcome, {{ session('admin_name') }}</h1>
        <p>Manage users, assign supervisors, and generate reports.</p>
        <a class="btn-primary" href="assignSupervisor">Assign Supervisor to Student</a>
    </div>

    <!-- Feature Section -->
    <div class="feature-section">
        <div class="feature-box">
            <i class="fas fa-user-plus"></i>
            <h3>Assign Supervisors</h3>
            <p>Assign supervisors to students to manage their progress effectively.</p>
        </div>
        <div class="feature-box">
            <i class="fas fa-users"></i>
            <h3>Manage Students</h3>
            <p>View and manage student profiles, grades, and assignments.</p>
        </div>
        <div class="feature-box">
            <i class="fas fa-chart-line"></i>
            <h3>Generate Reports</h3>
            <p>Generate performance reports for students and supervisors.</p>
        </div>
    </div>

    <!-- FontAwesome Script -->
    <script src="https://kit.fontawesome.com/yourfontawesomekit.js" crossorigin="anonymous"></script>
</body>
</html>
