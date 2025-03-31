<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #56CCF2, #2F80ED);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
            overflow: hidden;
        }

        .container {
            width: 100%;
            max-width: 400px;
            background: #fff;
            padding: 10px; /* Reduced padding */
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            color: #333;
            animation: fadeIn 1s ease-out;
        }

        h2 {
            color: #2F80ED;
            margin-bottom: 10px; /* Reduced margin */
            font-size: 24px; /* Smaller font size */
            animation: slideIn 1s ease-out;
        }

        .input-group {
            margin-bottom: 10px; /* Reduced bottom margin */
            text-align: left;
            opacity: 0;
            animation: fadeInUp 1s ease-in-out forwards;
        }

        .input-group:nth-child(1) {
            animation-delay: 0.2s;
        }

        .input-group:nth-child(2) {
            animation-delay: 0.3s;
        }

        .input-group:nth-child(3) {
            animation-delay: 0.4s;
        }

        .input-group:nth-child(4) {
            animation-delay: 0.5s;
        }

        .input-group:nth-child(5) {
            animation-delay: 0.6s;
        }

        .input-group:nth-child(6) {
            animation-delay: 0.7s;
        }

        .input-group:nth-child(7) {
            animation-delay: 0.8s;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 4px; /* Reduced margin */
            color: #333;
        }

        input, select {
            width: 100%;
            padding: 8px; /* Reduced padding */
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.3s, transform 0.3s;
        }

        input:focus, select:focus {
            border-color: #56CCF2;
            transform: translateY(-3px); /* Reduced transform */
        }

        button {
            width: 100%;
            padding: 8px; /* Reduced padding */
            border: none;
            border-radius: 8px;
            background: #56CCF2;
            color: white;
            font-size: 14px; /* Smaller font size */
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
        }

        button:hover {
            background: #2F80ED;
            transform: translateY(-3px); /* Reduced transform */
        }
        *,
*::before,
*::after {
    box-sizing: border-box; /* Include padding and border in element's total width and height */
    margin: 0;
    padding: 0;
}

body {
    background: linear-gradient(135deg, #56CCF2, #2F80ED);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: white;
    overflow: hidden;
}

.container {
    width: 100%;
    max-width: 400px;
    background: #fff;
    padding: 5px; /* Further reduced padding */
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    text-align: center;
    color: #333;
    animation: fadeIn 1s ease-out;
}

h2 {
    color: #2F80ED;
    margin-bottom: 5px; /* Further reduced margin */
    font-size: 20px; /* Smaller font size */
    animation: slideIn 1s ease-out;
}

.input-group {
    margin-bottom: 5px; /* Further reduced bottom margin */
    text-align: left;
    opacity: 0;
    animation: fadeInUp 1s ease-in-out forwards;
}

input,
select {
    width: 100%;
    padding: 5px; /* Further reduced padding */
    border: 1px solid #ccc; /* Thinner border */
    border-radius: 5px;
    font-size: 12px; /* Smaller font size */
    outline: none;
    transition: border-color 0.3s, transform 0.3s;
}

input:focus,
select:focus {
    border-color: #56CCF2;
    transform: translateY(-2px); /* Reduced transform */
}

button {
    width: 100%;
    padding: 5px; /* Further reduced padding */
    border: none;
    border-radius: 5px;
    background: #56CCF2;
    color: white;
    font-size: 12px; /* Smaller font size */
    cursor: pointer;
    transition: background 0.3s, transform 0.3s;
}

button:hover {
    background: #2F80ED;
    transform: translateY(-2px); /* Reduced transform */
}

a {
    display: block;
    margin-top: 5px; /* Further reduced margin */
    color: #56CCF2;
    text-decoration: none;
    font-size: 10px; /* Smaller font size */
    transition: color 0.3s;
}

a:hover {
    color: #2F80ED;
    text-decoration: underline;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideIn {
    from {
        transform: translateX(-100%);
    }
    to {
        transform: translateX(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

        a {
            display: block;
            margin-top: 10px; /* Reduced margin */
            color: #56CCF2;
            text-decoration: none;
            font-size: 12px; /* Smaller font size */
            transition: color 0.3s;
        }

        a:hover {
            color: #2F80ED;
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateX(-100%);
            }
            to {
                transform: translateX(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register as a Student</h2>
        
        @if ($errors->any())
            <div style="color: red; text-align: left; margin-bottom: 10px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form method="POST" action="{{ route('student.register') }}">
            @csrf
            <div class="input-group">
                <label>Registration Number:</label>
                <input type="text" name="student_reg_number" required>
            </div>
            <div class="input-group">
                <label>First Name:</label>
                <input type="text" name="student_first_name" required>
            </div>
            <div class="input-group">
                <label>Last Name:</label>
                <input type="text" name="student_last_name" required>
            </div>
            <div class="input-group">
                <label>Gender:</label>
                <select name="student_gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="input-group">
                <label>Email:</label>
                <input type="email" name="student_email" required>
            </div>
            <div class="input-group">
                <label>Phone Number:</label>
                <input type="text" name="student_phone_number" required>
            </div>
            <div class="input-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <div class="input-group">
                <label>Confirm Password:</label>
                <input type="password" name="password_confirmation" required>
            </div>
            <button type="submit">Register</button>
            <a href="login">I already have an account! Login</a>
        </form>
    </div>
</body>
</html>
