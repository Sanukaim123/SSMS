<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Relevant Course Units</h2>

<table>
    <thead>
        <tr>
            <th>Course Code</th>
            <th>Course Name</th>
           
            <!-- Add more columns as needed -->
        </tr>
    </thead>
    <tbody>
        @foreach ($courseCodes as $courseUnit)
            <tr>
                <td>{{ $courseUnit }}</td>
        @foreach($corseMame as $co)

                <td>{{ $courseName }}</td>
                <!-- Add more columns as needed -->
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>