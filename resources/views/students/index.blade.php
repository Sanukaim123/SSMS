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
                    <div class="card-header"><h2>Students</h2></div>
                    <div class="card-body">
    
        <a href="{{url('/cre')}}"  class="btn btn-success btn-sm" title="Add New student"><i class="fa fa-plus" aria-hidden="true"></i>Add a student</a>
    <br/>
    <br/>

    <div class="table-responsive">
                            <table class="table">
                                <thead>
            <tr>
                <th>ID</th>
                <th>Index</th>
                <th>Name</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
</tr>
</thead>
<tbody>
@foreach($students as $student)
<tr>
    <td>{{$student->id}}</td>
    <td>{{$student->index}}</td>
    <td>{{$student->name}}</td>
    <td>{{$student->emai}}</td>
    
    <td>
        <a href="{{route('students.edit',['student'=>$student])}}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
    </td>
    <td>
        <form method="post" action="{{route('students.destroy',['student'=>$student])}}"  accept-charset="UTF-8" style="display:inline">
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