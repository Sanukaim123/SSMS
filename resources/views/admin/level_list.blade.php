<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    <navbar>
	    @include('layouts.nav')
    </navbar>
<h1>Add Levels & Semesters</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>

<section id="add_level">
        
    <form method="post" action="{{route('level.store')}}">
        @csrf
        @method('post')
        <div class="level-form-group row">
                <label for="Level">Level:</label><br>
                <input type="text" id="Level" name="Level" placeholder="Level 1"><br>

                <label for="Semester">Semester:</label><br>
                <input type="text" id="Semester" name="Semester" placeholder="Semester 1">
            </div>
       
        <br>
        
        <button class="btn btn-primary" type="submit" value="Save a New Level">Add</button>
    </form>
    
</div>


