<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* Reset default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #121212;
            font-family: 'Arial', sans-serif;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        /* Navbar styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #1e1e1e;
            padding: 15px 30px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        }

        .navbar .brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #32cd32;
        }

        .navbar a {
            color: #ccc;
            font-size: 1.1rem;
            text-decoration: none;
            margin: 0 20px;
            transition: color 0.3s ease;
        }

        .navbar a:hover {
            color: #32cd32;
        }

        /* Jumbotron section */
        .jumbotron {
            background-color: #222;
            padding: 50px;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
            animation: fadeIn 1.5s ease-out;
        }

        .jumbotron h1 {
            font-size: 2.8rem;
            color: #32cd32;
            margin-bottom: 20px;
        }

        .jumbotron p {
            font-size: 1.2rem;
            color: #ddd;
        }

        .btn-manage {
            background-color: #32cd32;
            padding: 12px 25px;
            border-radius: 5px;
            color: white;
            font-size: 1.2rem;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-manage:hover {
            background-color: #228b22;
        }

        /* Feature cards section */
        .features {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .feature-card {
            background-color: #333;
            padding: 20px;
            width: 250px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            margin: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
        }

        .feature-card .icon {
            font-size: 3rem;
            color: #32cd32;
            margin-bottom: 15px;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            color: #fff;
            margin-bottom: 10px;
        }

        .feature-card p {
            color: #bbb;
        }

        /* Keyframe for fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar a {
                margin: 5px 0;
            }

            .features {
                flex-direction: column;
                align-items: center;
            }

            .feature-card {
                width: 80%;
            }

            .jumbotron h1 {
                font-size: 2rem;
            }

            .jumbotron p {
                font-size: 1rem;
            }

            .btn-manage {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="brand">Admin Dashboard</div>
        <div>
            <a href="home">Home</a>
            <a href="admin">Dashboard</a>
            <a href="logout">Logout</a>
        </div>
    </div>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1>Welcome to the Admin Dashboard!</h1>
        <p>Manage users, assign supervisors, and generate reports with ease.</p>
        <a class="btn-manage" href="admindash" role="button">Manage Now</a>
    </div>

    <!-- Feature Cards Section -->
    <div class="features">
        <div class="feature-card">
            <div class="icon">👥</div>
            <h3>Assign Supervisors</h3>
            <p>Quickly assign supervisors to students.</p>
        </div>
        <div class="feature-card">
            <div class="icon">📊</div>
            <h3>Generate Reports</h3>
            <p>Create and download detailed reports.</p>
        </div>
        <div class="feature-card">
            <div class="icon">🔒</div>
            <h3>Manage Security</h3>
            <p>Secure and manage user access levels.</p>
        </div>
    </div>

</body>
</html>
