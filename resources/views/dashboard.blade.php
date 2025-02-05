<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .card h2 {
            margin: 0;
        }
        .card .content {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to your Dashboard, {{ auth()->user()->name }}!</h1>

        {{-- User Info Card --}}
        <div class="card">
            <h2>Your Info</h2>
            <div class="content">
                <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
                <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
            </div>
        </div>

        {{-- Stats Card --}}
        <div class="card">
            <h2>Your Stats</h2>
            <div class="content">
                <p><strong>Total Users:</strong> {{ $total_users }}</p>
            </div>
        </div>
    </div>

</body>
</html>
