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
                
                <th>Index</th>
                <th>Full Hours</th>
                <th>Attend Hours</th>
                <th>Percentage</th>
                <th>Eligibility</th>
                
</tr>
</thead>
<tbody>
@foreach ($adds as $add)
<tr>
    <td> {{ $add->idcal }}</td>
   
    <td>{{$products}}</td>
   
    <td> {{ $add->total_attend_hours }}</td>
    <td>{{$add->total_attend_hours/$products*100}}%</td>
    <td> @if($add->total_attend_hours/$products*100>80)
        <span>Eligible</span>
        @else
        <span>Not Eligible</span>
        @endif
    </td>
@endforeach
</tr>
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