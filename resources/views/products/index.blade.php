<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body  style="background-color: purple;">
   
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>

        @endif
    </div>
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"><h2>Schedule</h2></div>
                    <div class="card-body">
    
        <a href="{{route('products.create')}}" class="btn btn-success btn-sm" title="Add New Contact"><i class="fa fa-plus" aria-hidden="true"></i>Add Schdeule</a>
    
<br/>
<br/>
<div class="table-responsive">
                            <table class="table">
                                <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Edit</th>
                <th>Delete</th>
</tr>
</thead>
<tbody>
@foreach($products as $product)
<tr>
    <td>{{$product->id}}</td>
    <td>{{$product->date}}</td>
    <td>{{$product->starttime}}</td>
    <td>{{$product->endtime}}</td>
    
    <td>
        <a href="{{route('products.edit',['product'=>$product])}}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
    </td>
    <td>
        <form method="post" action="{{route('products.destroy',['product'=>$product])}}"  accept-charset="UTF-8" style="display:inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
    </td>
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