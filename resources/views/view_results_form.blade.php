<!DOCTYPE html>
<html>
<head>
    <title>View Student Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:plum;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            margin-bottom: 30px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #4285f4;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #357ae8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>View Student Results</h1>
        <form method="POST" action="{{ route('view-results') }}">
            @csrf
            <label for="student_number">Enter Student Number:</label>
            <input type="text" id="student_number" name="student_number" required>
            <button type="submit">View Results</button>
        </form>
    </div>
</body>
</html>
