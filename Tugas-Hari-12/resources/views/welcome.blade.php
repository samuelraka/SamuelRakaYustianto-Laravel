<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 400px;
            transition: box-shadow 0.3s ease;
        }

        .container:hover {
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            color: #0056b3;
            margin-bottom: 20px;
        }

        p {
            margin: 10px 0;
            font-size: 16px;
        }

        .highlight {
            font-weight: bold;
            color: #0056b3;
        }

        .logout-button {
            display: block;
            margin: 20px auto 0;
            padding: 10px 20px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            font-size: 16px;
        }

        a{
            text-decoration: none;

        }
        
        .logout-button:hover {
            background-color: #c82333;
        }

        @media (max-width: 500px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome</h2>
        <p><span class="highlight">First Name:</span> {{ session('firstname') }}</p>
        <p><span class="highlight">Last Name:</span> {{ session('lastname') }}</p>
        <p><span class="highlight">Gender:</span> {{ session('gender') }}</p>
        <p><span class="highlight">Nationality:</span> {{ session('negara') }}</p>
        <p><span class="highlight">Languages Spoken:</span> {{ implode(', ', session('bahasa', [])) }}</p>
        <p><span class="highlight">Bio:</span> {{ session('bio') }}</p>

        <a href="{{ route('home') }}">
            <button class="logout-button">Logout</button>
        </a>
    </div>
</body>
</html>
