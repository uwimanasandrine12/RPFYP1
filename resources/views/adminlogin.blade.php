<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        /* General Body Styles */
        body {
            background-color: #212121; /* Dark Background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        /* Login Container */
        .login-container {
            background: #333; /* Dark Grey Background */
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 400px;
            animation: slideUp 1s ease-out;
        }

        /* Heading Style */
        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.8rem;
            color: #f5f5f5;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        /* Form Labels */
        .form-label {
            font-size: 1rem;
            font-weight: bold;
            color: #ddd;
            margin-bottom: 8px;
        }

        /* Input Fields */
        .form-control {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            margin-bottom: 20px;
            background-color: #444;
            border: none;
            border-radius: 8px;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .form-control:focus {
            background-color: #555;
            outline: none;
            border: 2px solid #6c5ce7;
        }

        /* Button Styles */
        .btn-login {
            width: 100%;
            padding: 12px;
            font-size: 1.1rem;
            border-radius: 8px;
            background-color: #6c5ce7;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: #5a4cc7;
        }

        /* Error Message */
        .alert-danger {
            background-color: #e74c3c;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        /* Animation for Slide-Up */
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 500px) {
            .login-container {
                padding: 30px;
            }

            .login-container h2 {
                font-size: 1.6rem;
            }

            .form-control {
                font-size: 0.9rem;
            }

            .btn-login {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Admin Login</h2>

        <!-- Display Error Message -->
        @if(session('error'))
            <div class="alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Login Form -->
        <form action="{{ url('/adminlogin') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>

</body>
</html>
