
@extends('admin.admindashboard')
@section('admin')
<div class="page-content">
    <h1>Assign Course Units to Subjects</h1>
    <br><br><br>
    <form action="{{ url('admin/subcourse/process') }}" method="post">
            @csrf
            
            <label for="S_Code">Select Subject: </label>
            <select name="S_Code" id="S_Code">
                @foreach($subjects as $id => $sCode)
                    <option value="{{ $sCode }}">{{ $sCode }}</option>
                @endforeach
            </select>



            <br><br><br>

            <label>Select Courses: </label>

            @foreach($courses as $id => $courseCode)
                <input type="checkbox" name="Course_Codes[]" value="{{ $courseCode }}">{{ $courseCode }}
            @endforeach


            <br><br><br>

            <input type="submit" value="Submit">
        </form>
</div>
   
   @endsection

