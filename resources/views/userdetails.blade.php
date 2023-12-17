@extends('admin.admindashboard')
@section('admin')
<div class="page-content">

    <div class="card">

              <div class="card-header">
                <h3 class="card-title">User Details</h3>
              </div>
              <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>username</th>
                    <th>email</th>
                    <th>password</th>
                    <th>role</th>
                    <th>status</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($records as $record)
            <tr>
                <td>{{$record['id']}}</td>
                <td>{{$record['name']}}</td>
                <td>{{$record['username']}}</td>
                <td>{{$record['email']}}</td>
                <td>{{$record['password']}}</td>
                <td>{{$record['role']}}</td>
                <td>{{$record['status']}}</td>

                <td>
                        <form method="post" action="{{route('record.destroy',['record'=>$record])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete"/>
                        </form>

             </td>
                    
        </tr>
        @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
    </div>
     <!-- /.card -->
</div>
 @endsection