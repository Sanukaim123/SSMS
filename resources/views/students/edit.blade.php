<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>
<body>
    
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <div class="card">
  <div class="card-header"><h2>Add Student</h2></div>
  <div class="card-body">
    <form method="post" action="{{route('students.update',['student'=>$student])}}">
        @csrf
        @method('put')
        <div>
            <label>Index</label>
            <input type="text" name="index" placeholder="index" value="{{$student->index}}" class="form-control"></br>
</div>
<div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name"  value="{{$student->name}}" class="form-control"></br>

</div>
<div>
            <label>Email</label>
            <input type="text" name="emai" placeholder="email"  value="{{$student->emai}}" class="form-control"></br>
</div>

<div>
    <input type="submit" value="update" class="btn btn-success"></br>
</div>
</form>
</div>
</div>

</body>
</html>