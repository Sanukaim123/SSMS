<!DOCTYPE html>
<html lang="en">
<head>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: purple;
            /* color: white; */
            font-family: 'Arial', sans-serif;
            /* Add more styles as needed */
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff; Set form background color
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="checkbox"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 13px;
            box-sizing: border-box;
        }

        button {
            background-color: purple; /* Green */
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
<div class="container">
        <h1>Select Course units</h1>
        <form method="POST" action="{{url('abc/process')}}">
            @csrf
            <label for="student_number">User Id:</label><br>
            <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" readonly><br>
            
    
    <h1><center>Select Course units</center></h1>

    <form method="post" action="{{url('abc/process')}}">
        @csrf
        <label for="name">User Id:</label><br>
        <input type="text" id="name" name="name"  value="{{ auth()->user()->name }}" readonly><br>


  
    <label>Select Courses: </label>

      @foreach($courses as $id => $courseCode)
      <input type="checkbox" name="Course_Codes[]" value="{{ $courseCode }}">{{ $courseCode }}
      @endforeach

    <br>
    <br>

    <button class="btn btn-primary" type="submit" value="Save a new course">Register</button>
      </div>
  </form>
</body>
</html>
