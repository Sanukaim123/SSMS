@extends('admin.admindashboard')
@section('admin')
<div class="page-content">
    <h1>Add Syllabus</h1>
    <br>
    <br>
    <form action="{{ url('/admin/syllabus/store') }}" method="post">
            @csrf
            
            <label for="S_Code">Select Subject:</label>
            
            <select name="S_Code" id="S_Code">
                @foreach($subjects as $id => $sCode)
                    <option value="{{ $sCode }}">{{ $sCode }}</option>
                @endforeach
            </select>

            <br>
            <br>

            <label for="Level">Select Level:</label>
            
            <select name="Level" id="Level">
            @foreach($levels as $id => $level)
            <option value="{{ $level }}">{{ $level }}</option>
            @endforeach
            </select>

            <br>
            <br>

            <label for="Semester_name">Select Semester:</label>
            <select name="Semester_name" id="Semester_name">
            @foreach($semesters as $id => $semester)
            <option value="{{ $semester }}">{{ $semester }}</option>
            @endforeach
            </select>
            <br>
            <br>

            <label>Select Courses:</label>
            <select name="Course_code" id="Course_code">
            @foreach($courses as $id => $courseCode)
            <option value="{{ $courseCode }}">{{ $courseCode }}</option>
            @endforeach
         </select>
         <br>
         <br>

         <!-- <label>Select Course Name:</label>
            <select name="Course_name" id="Course_name">
            @foreach($courses as $id => $courseName)
            <option value="{{ $courseName }}">{{ $courseName }}</option>
            @endforeach
           </select> -->




         <label for="Credit">Credit Value:</label>

            <select name="Credit" id="Credit">
            <option value="1">4</option>
            <option value="2">2.5</option>
            <option value="3">2</option>
            <option value="4">1.5</option>
            <option value="5">1.25</option>
            <option value="5">1</option>
            </select>
            <br>


<br>


            <input type="submit" value="Submit">
        </form>
</div>
 @endsection