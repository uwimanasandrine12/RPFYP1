<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* General Body Styles */
        body {
            margin: 0;
            padding: 0;
            display: flex;
            font-family: 'Arial', sans-serif;
            background-color: #222;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: #1f1f1f;
            color: #f5f5f5;
            height: 100vh;
            padding-top: 30px;
            box-shadow: 3px 0 5px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .sidebar h4 {
            text-align: center;
            font-size: 1.5rem;
            color: #f5f5f5;
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .sidebar a {
            display: block;
            padding: 15px 25px;
            color: #f5f5f5;
            font-size: 1.1rem;
            text-decoration: none;
            border-bottom: 1px solid #333;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #5a5a5a;
        }

        .sidebar .btn-logout {
            background-color: #ff6347;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .sidebar .btn-logout:hover {
            background-color: #e74c3c;
        }

        /* Content Styles */
        .content {
            flex-grow: 1;
            padding: 30px;
            color: #fff;
            background-color: #333;
            min-height: 100vh;
            transition: all 0.3s ease;
        }

        .content h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 40px;
            color: #e74c3c;
            text-transform: uppercase;
        }

        .modal-content {
            background-color: #444;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.5s ease-out;
        }

        .modal-content h5 {
            color: #f5f5f5;
            margin-bottom: 25px;
            font-size: 1.8rem;
        }

        .form-label {
            color: #ccc;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            background-color: #555;
            border: 1px solid #666;
            border-radius: 6px;
            color: #f5f5f5;
            font-size: 1.1rem;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
        }

        .form-control:focus {
            background-color: #666;
            outline: none;
            border-color: #e74c3c;
        }

        .btn-assign {
            background-color: #3498db;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        .btn-assign:hover {
            background-color: #2980b9;
        }

        /* Animation for Modal */
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

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
                padding-top: 20px;
            }

            .sidebar h4 {
                font-size: 1.2rem;
            }

            .sidebar a {
                padding: 12px 20px;
                font-size: 1rem;
            }

            .content {
                padding: 20px;
            }

            .modal-content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h4>Admin Panel</h4>
        <a href="#assignSupervisor">Assign Supervisor</a>
        <a href="department">Add Department</a>
        <a href="faculty">Add Faculty</a>
        <a href="campus">Add Campus</a>
        <button class="btn-logout">Logout</button>
    </div>

    <!-- Content Section -->
    <div class="content">
        <h2>Admin Dashboard</h2>
        
        <div class="modal-content">
            <h5>Assign Supervisor to Student</h5>
            <form>
                <div class="mb-3">
                    <label class="form-label">Student Registration Number</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Supervisor Email</label>
                    <input type="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Department Code</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Faculty Code</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Campus Code</label>
                    <input type="text" class="form-control" required>
                </div>
                <button type="submit" class="btn-assign">Assign</button>
            </form>
        </div>
    </div>

</body>
</html>
