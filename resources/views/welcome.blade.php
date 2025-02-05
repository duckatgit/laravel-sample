<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Welcome to Laravel</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7fafc;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        .navbar {
            background-color: #fff;
            padding: 1rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .nav-links {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
        }
        .button {
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .button-primary {
            background-color: #4299e1;
            color: white;
        }
        .button-secondary {
            background-color: transparent;
            color: #4299e1;
            border: 1px solid #4299e1;
        }
        .welcome-text {
            text-align: center;
            margin-top: 4rem;
            font-size: 2.5rem;
            color: #2d3748;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="nav-links">
                <a href="{{ route('login') }}" class="button button-secondary">Login</a>
                <a href="{{ route('register') }}" class="button button-primary">Register</a>
            </div>
        </div>
    </nav>
    
    <div class="container">
        <h1 class="welcome-text">Welcome to Laravel</h1>
    </div>
</body>
</html>