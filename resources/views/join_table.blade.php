<!DOCTYPE html>
<head>
    <title>

    </title>
</head>
<body>
    <table>
    <thead>
        <tr>
            
            <th>Course Code</th>
            <th>Subject Name</th>
            <th>result</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
        <tr>
           
            <td>{{$row->course_unit}}</td>
            <td>{{$row->subject_name}}</td>
            <td>{{$row->grade}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>