<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
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

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            transition: border 0.3s;
        }

        input[type="text"]:focus,
        select:focus,
        textarea:focus {
            border-color: #0056b3;
            outline: none;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 10px;
        }

        .checkbox-group {
            margin-top: 10px;
        }

        input[type="submit"] {
            background-color: #0056b3;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #004494;
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
        <h2>Sign Up Form</h2>

        <form action="{{ route('postRegister') }}" method="POST">
            @csrf

            <label>First Name:</label>
            <input type="text" name="firstname" required>

            <label>Last Name:</label>
            <input type="text" name="lastname" required>

            <label>Gender:</label>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other">Other

            <label>Nationality:</label>
            <select name="negara">
                <option value="Indonesia">Indonesia</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Thailand">Thailand</option>
                <option value="Vietnam">Vietnam</option>
            </select>

            <label>Language Spoken:</label>
            <div class="checkbox-group">
                <input type="checkbox" name="bahasa[]" value="Bahasa Indonesia">Bahasa Indonesia<br>
                <input type="checkbox" name="bahasa[]" value="English">English<br>
                <input type="checkbox" name="bahasa[]" value="Other">Other
            </div>

            <label>Bio:</label>
            <textarea name="bio" rows="4" cols="30"></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
