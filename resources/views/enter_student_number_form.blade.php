<!-- Inside enter_student_number_form.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Enter Student Number</title>
</head>
<body>
    <h1>Enter Student Number</h1>
    <form method="POST" action="{{ route('process-student-number') }}">
        @csrf
        <label for="student_number">Student Number:</label>
        <input type="text" id="student_number" name="student_number">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
