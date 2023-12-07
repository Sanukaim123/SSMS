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
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Credit Value</th>
                    <th>Discription</th>
                    <th>Delete</th>
                    <th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($courses as $course)
        <tr>
        <td>{{$course->id}}</td>
                    <td>{{$course->Course_Code}}</td>
                    <td>{{$course->Course_Name}}</td>
                    <td>{{$course->Credit_Value}}</td>
                    <td>{{$course->Description}}</td>

                    <td>
                        <form method="post" action="{{route('course.destroy',['course'=>$course])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete"/>
                        </form>

                    </td>
                    <td>
                        <a href ="{{route('course.edit',['course'=>$course])}}">Edit</a>
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