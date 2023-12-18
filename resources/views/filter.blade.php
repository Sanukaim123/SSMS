<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Units relevant to Mathematics ,Level1,Semester I</title>
    <style>
        body {
            background-color: purple;
            color: white;
            font-family: 'Arial', sans-serif;
        }

        h1 {
            color: yellow; /* Change the color of the heading text if needed */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid white;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50; /* Green, change it to your desired color */
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        p {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1><Center>Course Units relevant to Mathematics ,Level1,Semester I<Center></h1>

    @if(count($filteredSyllabus) > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>S_Code</th>
                    <th>Level</th>
                    <th>Semester_name</th>
                    <th>Course_code</th>
                    <!-- <th>Course_name</th> -->
                    <th>Credit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($filteredSyllabus as $syllabus)
                    <tr>
                        <td>{{ $syllabus->id }}</td>
                        <td>{{ $syllabus->S_Code }}</td>
                        <td>{{ $syllabus->Level }}</td>
                        <td>{{ $syllabus->Semester_name }}</td>
                        <td>{{ $syllabus->Course_code }}</td>
                        <!-- <td>{{ $syllabus->Course_name }}</td> -->
                        <td>{{ $syllabus->Credit }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No filtered syllabus details found.</p>
    @endif
</body>
</html>
