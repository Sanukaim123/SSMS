<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student feedbackform</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Student Feedback</title>
    <style>
        body{
            background-color: #f3f0f6;
        
        }
        h1 {
                color: #583672;
        }
        
        tr:hover {
            background-color: #bc9dd4;
        }
        tr:nth-child(even) {
            background-color: #a0869d;
        }
        tr:nth-child(odd){
            background-color: #c1acd0;
        }  
        h2{
            color: #715785;
        } 
        tr{font-size: 20px;}
        .button1{
            font-size: 30px;
            background-color: #c974c2;
            padding: 10px; 
            color: #3d063e;
            border-radius: 10px;
            
        }
        .button2{
            font-size: 30px;
            background-color: #c974c2;
            padding: 10px; 
            color: #3d063e;
            border-radius: 10px;
            
        }
        .select1{
            color: #3d063e;
            font-size: 20px;
        }
        
   
              
    </style>
</head>
<body>
    
<h1>Student Feedback Form</h1>
<form action="" method="post"> 
@csrf
<h2>Select Subject</h2>
        
            <select name="subjectselection">
              <option name="subjectselection" value="0">Select Subject 0</option>
              <option name="subjectselection" value="1">Select Subject 1</option>
              <option name="subjectselection" value="2">Select Subject 2</option>
              <option name="subjectselection" value="3">Select Subject 3</option>
              <option name="subjectselection" value="4">Select Subject 4</option>
              <option name="subjectselection" value="5">Select Subject 5</option>
              <option name="subjectselection" value="6">Select Subject 6</option>
              <option name="subjectselection" value="7">Select Subject 7</option>
              <option name="subjectselection" value="8">Select Subject 8</option>
              <option name="subjectselection" value="9">Select Subject 9</option>
              <option name="subjectselection" value="10">Select Subject 10</option>
              <option name="subjectselection" value="11">Select Subject 11</option>
              <option name="subjectselection" value="12">Select Subject 12</option>
            </select>
<h2>Please indicate your response by checking the appropriate box according to the following scale.</h2>  
<table border="6">
            <tr>
                <th>  </th>
                <th>Strongly Disagree</th>
                <th>Disagree</th>
                <th>Average</th>
                <th>Agree</th>
                <th>Strongly Agree</th>
            </tr>
            <tr>
                <td>A. The Teaching aids were used effectively during the lecture. </td>
                <td><center><input type="radio" id="A" name="A" value="Strongly Disagree"></td>
                <td><center><input type="radio" id="A" name="A" value="Disagree"></td>
                <td><center><input type="radio" id="A" name="A" value="Average"></td>
                <td><center><input type="radio" id="A" name="A" value="Agree"></td>
                <td><center><input type="radio" id="A" name="A" value="Strongly Agree"></td>
            
            </tr>
            <tr>
                <td>B. The lecturer was punctual (start/stop lectures on time) </td>
                <td><center><input type="radio" id="B" name="B" value="Strongly Disagree"></td>
                <td><center><input type="radio" id="B" name="B" value="Disagree"></td>
                <td><center><input type="radio" id="B" name="B" value="Average"></td>
                <td><center><input type="radio" id="B" name="B" value="Agree"></td>
                <td><center><input type="radio" id="B" name="B" value="Strongly Agree"></td>
            </tr>
            <tr>
                <td>C. The lecture was conducted at an acceptable speed. </td>
                <td><center><input type="radio" id="C" name="C" value="Strongly Disagree"></td>
                <td><center><input type="radio" id="C" name="C" value="Disagree"></td>
                <td><center><input type="radio" id="C" name="C" value="Average"></td>
                <td><center><input type="radio" id="C" name="C" value="Agree"></td>
                <td><center><input type="radio" id="C" name="C" value="Strongly Agree"></td>                
            </tr>
            <tr>
                <td>D. The lectures were clear and easy to understand.  </td>
                <td><center><input type="radio" id="D" name="D" value="Strongly Disagree"></td>
                <td><center><input type="radio" id="D" name="D" value="Disagree"></td>
                <td><center><input type="radio" id="D" name="D" value="Average"></td>
                <td><center><input type="radio" id="D" name="D" value="Agree"></td>
                <td><center><input type="radio" id="D" name="D" value="Strongly Agree"></td> 
            </tr>        
            <tr>
                <td>E. The methods of teaching adopted were good. (lectures, discussions, presentations, tutorials, case studies etc.)  </td>
                <td><center><input type="radio" id="E" name="E" value="Strongly Disagree"></td>
                <td><center><input type="radio" id="E" name="E" value="Disagree"></td>
                <td><center><input type="radio" id="E" name="E" value="Average"></td>
                <td><center><input type="radio" id="E" name="E" value="Agree"></td>
                <td><center><input type="radio" id="E" name="E" value="Strongly Agree"></td> 
            </tr>
            <tr>
                <td>F. The lecturer encouraged to ask questions by students and discussed them.  </td>
                <td><center><input type="radio" id="F" name="F" value="Strongly Disagree"></td>
                <td><center><input type="radio" id="F" name="F" value="Disagree"></td>
                <td><center><input type="radio" id="F" name="F" value="Average"></td>
                <td><center><input type="radio" id="F" name="F" value="Agree"></td>
                <td><center><input type="radio" id="F" name="F" value="Strongly Agree"></td>
            </tr>
            <tr>
                <td>G. The classes were conducted as indicated in the time table.  </td>
                <td><center><input type="radio" id="G" name="G" value="Strongly Disagree"></td>
                <td><center><input type="radio" id="G" name="G" value="Disagree"></td>
                <td><center><input type="radio" id="G" name="G" value="Average"></td>
                <td><center><input type="radio" id="G" name="G" value="Agree"></td>
                <td><center><input type="radio" id="G" name="G" value="Strongly Agree"></td>
            </tr>
            <tr>
                <td>H. The lecturer was confident in teaching the subject.  </td>
                <td><center><input type="radio" id="H" name="H" value="Strongly Disagree"></td>
                <td><center><input type="radio" id="H" name="H" value="Disagree"></td>
                <td><center><input type="radio" id="H" name="H" value="Average"></td>
                <td><center><input type="radio" id="H" name="H" value="Agree"></td>
                <td><center><input type="radio" id="H" name="H" value="Strongly Agree"></td>
            </tr>
            <tr>
                <td>I. The lectures helped to improve knowledge.  </td>
                <td><center><input type="radio" id="I" name="I" value="Strongly Disagree"></td>
                <td><center><input type="radio" id="I" name="I" value="Disagree"></td>
                <td><center><input type="radio" id="I" name="I" value="Average"></td>
                <td><center><input type="radio" id="I" name="I" value="Agree"></td>
                <td><center><input type="radio" id="I" name="I" value="Strongly Agree"></td>
            </tr>
            <tr>
                <td>J. The course outline/syllabus given at the beginning was covered.  </td>
                <td><center><input type="radio" id="J" name="J" value="Strongly Disagree"></td>
                <td><center><input type="radio" id="J" name="J" value="Disagree"></td>
                <td><center><input type="radio" id="J" name="J" value="Average"></td>
                <td><center><input type="radio" id="J" name="J" value="Agree"></td>
                <td><center><input type="radio" id="J" name="J" value="Strongly Agree"></td>
            </tr>
            <tr>
                <td><b>The overall grading of the course </b></td>
                <td><center><input type="radio" id="overall" name="overall" value="Strongly Disagree"></td>
                <td><center><input type="radio" id="overall" name="overall" value="Disagree"></td>
                <td><center><input type="radio" id="overall" name="overall" value="Average"></td>
                <td><center><input type="radio" id="overall" name="overall" value="Agree"></td>
                <td><center><input type="radio" id="overall" name="overall" value="Strongly Agree"></td>                               
            </tr>
                    <tr>
                        <td>
                                        <p><b>Welcome for Other Comments</b></p>
                        </td>
                        <td colspan="5">
                                         <textarea id="comments" name="comments" rows="10" cols="100">

                                        </textarea>
                        </td>
                        
                    </tr>
</table> 
                     <center> <button class="button button1" type="submit">Submit</button>
                      <button class="button button2" type="reset">reset</button>
</form>                                 
</body>
</html>   
</body>
</html>