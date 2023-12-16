<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Select Course units</h1> 

  <form method="post" action="{{url('abc/process')}}">
    @csrf
    <label for="name">User Id:</label><br>
    <input type="text" id="name" name="name"  value="{{ auth()->user()->name }}" readonly><br>

   

    <label>Select Courses: </label>

      @foreach($courses as $id => $courseCode)
      <input type="checkbox" name="Course_Codes[]" value="{{ $courseCode }}">{{ $courseCode }}
      @endforeach

    <br>
    <br>

    <button class="btn btn-primary" type="submit" value="Save a new course">Register</button>
  </form>
</body>
</html>