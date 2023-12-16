@extends('admin.admindashboard')
@section('admin')
<div class="page-content">
<h1>Add Results</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>


        
    <form method="post" action=" {{route('stresult.store')}}">
        @csrf
        @method('post')
        <div class="course-form-group row">
                <label for="reg_no">Registration No:</label><br>
                <input type="text" id="reg_no" name="reg_no" placeholder="SC/2019/10748"><br>

                <label for="course_code">Course Code:</label><br>
                <input type="text" id="course_code" name="course_code" placeholder="MAT111b">

                <label for="course_name">Course Name:</label><br>
                <input type="text" id="course_name" name="course_name" placeholder="Vector Analysis">

                <label for="result">Result:</label><br>
                <input type="text" id="'result" name="result" placeholder="B+">

                
            </div>
       
        <br>
        
        <button class="btn btn-primary" type="submit" value="Save a new subject">Submit form</button>
    </form>
    
</div>



@endsection
