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
            color: white;
            height: 100vh;
            padding-top: 20px;
            box-shadow: 3px 0 5px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .sidebar h4 {
            text-align: center;
            font-size: 1.6rem;
            margin-bottom: 30px;
            color: #f5f5f5;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .sidebar a {
            display: block;
            padding: 15px;
            color: #f5f5f5;
            font-size: 1.1rem;
            text-decoration: none;
            transition: background-color 0.3s ease;
            border-bottom: 1px solid #444;
        }

        .sidebar a:hover {
            background-color: #5a5a5a;
        }

        .sidebar .btn-logout {
            background-color: #ff6347;
            color: white;
            padding: 10px 20px;
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
            color: #e74c3c;
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .modal-content {
            background-color: #444;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.5s ease-out;
        }

        .modal-content h5 {
            color: #f5f5f5;
            font-size: 1.8rem;
            margin-bottom: 25px;
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
        <h2>Add Campus</h2>
        
        <div class="modal-content">
            <h5>Add Campus</h5>
            <form>
                <div class="mb-3">
                    <label class="form-label">Campus ID</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Campus Name</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Faculty Code</label>
                    <input type="text" class="form-control" required>
                </div>
                <button type="submit" class="btn-assign">Add Campus</button>
            </form>
        </div>
    </div>

</body>
</html>
