<!DOCTYPE html>
<html>
<head>
    <title>Calculate Student Department Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
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

        select,
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
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculate Subject GPA</h1>
        <form method="POST" action="{{ route('process-student-department-data') }}">
            @csrf
            <label for="student_number">Student Number:</label>
            <input type="text" id="student_number" name="student_number" value="{{ auth()->user()->name }}" readonly><br><br>
            
            <label for="department">Select Subject:</label>
            <select id="department" name="department" required>
                <option value="Mathematics">Mathematics</option>
                <option value="Applied Mathematics">Applied Mathematics</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Physics">Physics</option>
            </select><br><br>
            
            <button type="submit">Calculate</button>
        </form>
    </div>
</body>
</html>
