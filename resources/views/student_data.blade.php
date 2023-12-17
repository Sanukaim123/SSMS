<!-- Inside student_data.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Student Data</title>
</head>
<body>
    <h1>Student Data</h1>
    <p>Sum of Credit Values: {{ $sumCreditValues }}</p>
    <p>Sum of GPA Totals: {{ $sumGPATotals }}</p>
    <p>Average GPA: {{ $averageGPA }}</p>

    <!-- Display student's individual results -->
    <h2>Student Results</h2>
    <table>
        <thead>
            <tr>
                <th>Course Unit</th>
                <th>Grade</th>
                <!-- Add other relevant headers -->
            </tr>
        </thead>
        <tbody>
            @foreach($results as $result)
                <tr>
                    <td>{{ $result->course_unit }}</td>
                    <td>{{ $result->grade }}</td>
                    <!-- Add other relevant data -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
