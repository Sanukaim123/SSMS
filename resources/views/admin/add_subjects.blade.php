@extends('admin.admindashboard')
@section('admin')
<div class="page-content">
<h1>Add Subjects</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>


        
    <form method="post" action="{{route('subject.store')}}">
        @csrf
        @method('post')
        <div class="course-form-group row">
                <label for="S_Code">Subject Code:</label><br>
                <input type="text" id="S_Code" name="S_Code" placeholder="MAT"><br>

                <label for="S_Name">Subject Name:</label><br>
                <input type="text" id="S_Name" name="S_Name" placeholder="Mathematics">
            </div>
       
        <br>
        
        <button class="btn btn-primary" type="submit" value="Save a new subject">Submit form</button>
    </form>
    
</div>



@endsection
    
    
