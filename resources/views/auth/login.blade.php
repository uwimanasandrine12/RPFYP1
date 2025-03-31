<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <style>
        /* Global styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
            animation: fadeIn 1s ease-in-out;
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Card styling */
        .card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
            animation: slideIn 1s ease-out;
        }

        /* Slide-in animation */
        @keyframes slideIn {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #5e35b1;
        }

        /* Input field styling */
        .form-label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #3e2723;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #3e2723;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #8e24aa;
            box-shadow: 0 0 8px rgba(142, 36, 170, 0.4);
            outline: none;
        }

        /* Button styling */
        .btn {
            background-color: #8e24aa;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            background-color: #7b1fa2;
            transform: scale(1.05);
        }

        /* Link styles */
        .text-center {
            text-align: center;
        }

        .text-decoration-none {
            text-decoration: none;
            color: #5e35b1;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .text-decoration-none:hover {
            color: #8e24aa;
            text-decoration: underline;
        }

        /* Alert styling */
        .alert {
            background-color: #fbe9e7;
            color: #d32f2f;
            padding: 12px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .alert ul {
            list-style-type: none;
            padding-left: 0;
            margin: 0;
        }

        .alert li {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h3>Student Login</h3>
        
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('student.login') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Registration Number:</label>
                <input type="text" name="student_reg_number" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn">Login</button>
            
            <div class="text-center mt-3">
                <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot Password?</a>
            </div>

            <div class="text-center mt-2">
                <a href="register" class="text-decoration-none">Don't have an account? Register</a>
            </div>
        </form>
    </div>
</body>
</html>
