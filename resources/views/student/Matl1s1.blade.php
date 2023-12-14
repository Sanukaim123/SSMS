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
        @foreach ($courseUnits as $courseUnit)
            <tr>
                <td>{{ $courseUnit->Course_Code }}</td>
                <td>{{ $courseUnit->Course_Name }}</td>
                <!-- Add more columns as needed -->
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>