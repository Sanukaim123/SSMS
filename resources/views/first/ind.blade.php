<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body  style="background-color: purple;">
   
    
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"><h2>Schedule</h2></div>
                    <div class="card-body">
    
       
    

<div class="table-responsive">
                            <table class="table">
                                <thead>
            <tr>
                
               <th>ID</th>
               <th>Date</th>
               <th>Hours</th>
               <th>Add Attendance</th>
<tbody>
@foreach($products as $product)
<tr>
    <td>{{$product->id}}</td>
    <td>{{$product->date}}</td>
    <td> @if($product->starttime +1 >= $product->endtime)
        <span>1 hour</span>
        @else
        <span>2 hour</span>
        @endif
    </td>
  
    <td> <a href="{{route('first.indd',['product'=>$product])}}" value="">Add</a></td>
</tr>


@endforeach
</tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>