<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Syllabus</h1>
    <form action="{{ url('admin/syllabus_process') }}" method="post">
            @csrf
            
            <label for="S_Code">Select Subject:</label>
            <select name="S_Code" id="S_Code">
                @foreach($subjects as $id => $sCode)
                    <option value="{{ $sCode }}">{{ $sCode }}</option>
                @endforeach
            </select>

            <br>

            <label for="Level">Select Level:</label>
            <select name="Level" id="Level">
            @foreach($levels as $id => $level)
            <option value="{{ $level }}">{{ $level }}</option>
            @endforeach
            </select>

            <br>

            <label for="Semester_name">Select Semester:</label>
            <select name="Semester_name" id="Semester_name">
            @foreach($semesters as $id => $semester)
            <option value="{{ $semester }}">{{ $semester }}</option>
            @endforeach
            </select>
            <br>

            <label>Select Courses:</label>
            @foreach($courses as $id => $courseCode)
                <input type="checkbox" name="Course_Codes[]" value="{{ $courseCode }}">{{ $courseCode }}
            @endforeach
<br>
<br>


            <input type="submit" value="Submit">
        </form>
</body>
</html>