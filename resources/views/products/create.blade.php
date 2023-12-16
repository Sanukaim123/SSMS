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
  <div class="card-header"><h2>Add Schedule</h2></div>
  <div class="card-body">
    <form method="post" action="{{route('products.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Date</label>
            <input type="text" name="date" placeholder="Y/M/D" class="form-control"></br>
</div>
<div>
            <label>Start Time</label>
            <input type="text" name="starttime" placeholder="starttime" class="form-control"></br>

</div>
<div>
            <label>End Time</label>
            <input type="text" name="endtime" placeholder="endtime" class="form-control"></br>
</div>

<div>
        <input type="submit" value="Add Schedule" class="btn btn-success"></br>
    
</div>
</form>
  </div>
</div>


</body>
</html>