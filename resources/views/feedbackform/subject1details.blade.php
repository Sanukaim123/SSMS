 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show feedback details</title>
</head>
<body>
    <h2>FeedBack Details</h2>
    <h3>Description</h3>
    <li>A. The Teaching aids were used effectively during the lecture.</li>
    <li>B. The lecturer was punctual (start/stop lectures on time) </li>
    <li>C. The lecture was conducted at an acceptable speed.</li>
    <li>D. The lectures were clear and easy to understand.</li>
    <li>E. The methods of teaching adopted were good. (lectures, discussions, presentations, tutorials, case studies etc.)</li>
    <li>F. The lecturer encouraged to ask questions by students and discussed them.</li>
    <li>G. The classes were conducted as indicated in the time table.</li>
    <li>H. The lecturer was confident in teaching the subject.</li>
    <li>I. The lectures helped to improve knowledge.</li>
    
    <li>J. The course outline/syllabus given at the beginning was covered.</li>
    <li>overall-<b>The overall grading of the course </b></li>
    <li>comments-<b>Welcome for Other Comments</b></li>
    <h3>Details Table</h3>
    <table border="2";>
        <tr>
           <th>subject Selection</th>
           <th>A</th>
           <th>B</th>
           <th>C</th>
           <th>D</th>
           <th>E</th>
           <th>F</th>
           <th>G</th>
           <th>H</th>
           <th>I</th>
           <th>J</th>
           <th>Overall</th>
           <th>Other Comments</th>
        </tr>  
        <tr>
            @foreach($records as $record)
           <td>{{$record['subjectselection']}}</td>
           <td>{{$record['A']}}</td>
           <td>{{$record['B']}}</td>
           <td>{{$record['C']}}</td>
           <td>{{$record['D']}}</td>
           <td>{{$record['E']}}</td>
           <td>{{$record['F']}}</td>
           <td>{{$record['G']}}</td>
           <td>{{$record['H']}}</td>
           <td>{{$record['I']}}</td>
           <td>{{$record['J']}}</td>
           <td>{{$record['overall']}}</td>
           <td>{{$record['comments']}}</td>
        </tr>  
        
        @endforeach
    </table>
    
</body>
</html> 