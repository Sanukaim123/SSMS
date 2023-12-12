<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Add Combination</h1>
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
                    <input type="text" id="Semester_name" name="Semester_name" placeholder="A"><br>

                   
                </div>
        
            <br>
            
            <button class="btn btn-primary" type="submit" value="Save a New Combination">Save</button>
        </form>
        
</body>
</html>