@extends('admin.admindashboard')
@section('admin')
<div class="page-content">
<div class="card">

              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                  <tr>
                        <th>ID</th>
                        <th>Subject Code</th>
                        <th>Subject Name</th>
                        <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($subjects as $subject)
        <tr>
            <td>{{$subject->id}}</td>
            <td>{{$subject->S_Code}}</td>
            <td>{{$subject->S_Name}}</td>
            <td>
                <form method="post" action="{{route('subject.destroy',['subject'=>$subject])}}">
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