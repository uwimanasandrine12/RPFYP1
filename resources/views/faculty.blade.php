<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            background-color: #121212;
            color: white;
            height: 100vh;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background: linear-gradient(180deg, #1e1e1e, #333);
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.5);
        }

        .sidebar h4 {
            margin-bottom: 20px;
            color: #32cd32;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 12px;
            width: 80%;
            text-align: center;
            text-decoration: none;
            margin: 5px 0;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background: #32cd32;
        }

        .btn-back {
            background: #228b22;
        }

        .btn-logout {
            background: #b22222;
        }

        .content {
            flex-grow: 1;
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            animation: fadeIn 1.2s ease-out;
        }

        h2 {
            color: #32cd32;
            margin-bottom: 20px;
        }

        .form-container {
            background: #222;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
            width: 400px;
            text-align: center;
        }

        .form-container h5 {
            margin-bottom: 15px;
            color: #32cd32;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: none;
            background: #333;
            color: white;
        }

        .btn-submit {
            background: #ffa500;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-submit:hover {
            background: #ff8c00;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4>Admin Panel</h4>
        <a href="#assignSupervisor">Assign Supervisor</a>
        <a href="department">Add Department</a>
        <a href="faculty">Add Faculty</a>
        <a href="campus">Add Campus</a>
        <a href="admin" class="btn-back">Back</a>
        <a href="adminlogin" class="btn-logout">Logout</a>
    </div>

    <div class="content">
        <h2>Admin Dashboard</h2>
        <div class="form-container">
            <h5>Add Faculty</h5>
            <form>
                <div class="form-group">
                    <label>Faculty Code</label>
                    <input type="text" required>
                </div>
                <div class="form-group">
                    <label>Faculty Name</label>
                    <input type="text" required>
                </div>
                <div class="form-group">
                    <label>Department Name</label>
                    <input type="text" required>
                </div>
                <button type="submit" class="btn-submit">Add</button>
            </form>
        </div>
    </div>
</body>
</html>