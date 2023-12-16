<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    
   
    <form method="post" action="{{route('products.upd')}}">
        @csrf
        @method('put')
        <div>
            <label>Hours</label>
            <input type="text" name="hourscal"  value="{{$product->endtime - $product->starttime}}" ></br>
</div>
<div>
            <label>Index</label>
            <input type="text" name="idcal"  value="{{$student->index}}" ></br>

</div>
<div>
            <label>Attendance Details</label>
            <input type="radio" name="attendcal" value="attend">Attend

<input type="radio" name="attendcal" value="notattend">Not Attend 
    
 
</div>

<div>
    <input type="submit" value="Add" ></br>
</div>
</form>
</div>
</div>

</body>
</html>