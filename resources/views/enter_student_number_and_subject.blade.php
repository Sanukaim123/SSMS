<form method="POST" action="{{ route('process-student-data') }}">
    @csrf
    <label for="student_number">Student Number:</label>
    <input type="text" id="student_number" name="student_number"><br><br>
    
    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject"><br><br>
    
    <button type="submit">Calculate</button>
</form>
