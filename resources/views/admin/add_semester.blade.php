@extends('admin.admindashboard')
@section('admin')
<div class="page-content">
<h1>Add Semesters</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('semester.store')}}">
            @csrf
            @method('post')
            <div class="level-form-group row">
                    <label for="Semester_name">Semester:</label><br>
                    <input type="text" id="Semester_name" name="Semester_name" placeholder="1"><br>

                   
                </div>
        
            <br>
            
            <button class="btn btn-primary" type="submit" value="Save a New Combination">Save</button>
        </form>
        
</div>
@endsection