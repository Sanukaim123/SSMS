<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Assign Course Units to Subjects</h1>
    <form action="{{ url('admin/subcourse/process') }}" method="post">
            @csrf
            
            <label for="S_Code">Select Student:</label>
            <select name="S_Code" id="S_Code">
                @foreach($subjects as $id => $sCode)
                    <option value="{{ $sCode }}">{{ $sCode }}</option>
                @endforeach
            </select>

            <br>

            <label>Select Courses:</label>
            @foreach($courses as $id => $courseCode)
                <input type="checkbox" name="Course_Codes[]" value="{{ $courseCode }}">{{ $courseCode }}
            @endforeach

            <br>

            <input type="submit" value="Submit">
        </form>
</body>
</html>