@extends('admin.admindashboard')
@section('admin')
<div class="page-content">
   <h1>Edit Course Details</h1> 
   <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
   <section id="add_sub">
        
    <form method="post" action="{{route('course.update',['course'=>$course])}}">
    
        @csrf
        @method('put')
        <div class="course-form-group row">
           
                
                <label for="Course_Code">Course Code:</label><br>
                <input type="text" id="Course_Code" name="Course_Code" placeholder="MAT111b"><br><br>

                <label for="Course_Name">Course Name:</label><br>
                <input type="text" id="Course_Name" name="Course_Name" placeholder="Vectors"><br><br>
                
                <label for="Credit_Value">Credit value:</label><br>
                <input type="Credit_Value" id="Credit_Value" name="Credit_Value" placeholder="Vectors"><br><br>

                <p><label for="w3review">Description : </label></p>

        <textarea id="Description" name="Description" rows="4" cols="50">
        </textarea>
            </div>
       
        <br>
        
        <button class="btn btn-primary" type="submit" value="Save a new course">Edit</button>
    </form>
    
</div>
@endsection
   
