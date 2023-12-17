<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Student Result</title>
    <style>
	
	        .form-container {
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        select {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .btn {
            /* Your button styles */
            /* ... */
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Enter Student Result</h1>
        <form method="POST" action="{{ route('store-student-data') }}">
            @csrf
            <label for="student_name">Student Name:</label>
            <input type="text" id="student_name" name="student_name" required>
            
            <label for="student_number">Student Number:</label>
            <input type="text" id="student_number" name="student_number" required>
            
            <label for="department">Subject:</label>
            <select id="department" name="department">
			<option value="Mathematics">Mathematics</option>
        <option value="Applied Mathematics">Applied Mathematics</option>
        <option value="Chemistry">Chemistry</option>
        <option value="Computer Science">Computer Science</option>
        <option value="Physics">Physics</option>
                <!-- Options for subjects -->
            </select>
            
            <div style="display: flex; justify-content: space-between;">
                <div style="width: 48%;">
                    <label for="course_unit">Course Unit:</label>
                    <input type="text" id="course_unit" name="course_unit" required>
                </div>
                <div style="width: 48%;">
                    <label for="credit_value">Credit Value:</label>
                    <select id="credit_value" name="credit_value">
					<option value="1">1</option>
		<option value="1.25">1.25</option>
		<option value="1.5">1.5</option>
		<option value="2">2</option>
		<option value="2.5">2.5</option>
		<option value="3">3</option>
		<option value="4">4</option>
                        <!-- Options for credit values -->
                    </select>
                </div>
            </div>
            
            <label for="grade">Grade:</label>
            <select id="grade" name="grade">
			<option value="A+">A+</option>
    <option value="A">A</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B">B</option>
    <option value="B-">B-</option>
    <option value="C+">C+</option>
    <option value="C">C</option>
    <option value="C-">C-</option>
    <option value="D+">D+</option>
    <option value="D">D</option>
    <option value="E">E</option>
    <option value="E*">E*</option>
    <option value="MC">MC</option>
                <!-- Options for grades -->
            </select>

            <button type="submit" class="btn">Submit &#8594;</button>
            <button type="reset" class="btn">Reset</button>
        </form>
    </div>
</body>
</html>
