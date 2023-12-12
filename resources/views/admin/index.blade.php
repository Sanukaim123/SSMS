@extends('admin.admindashboard')
@section('admin')
<div class="page-content">


  <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">Welcome to SSMS</h4>
    </div>

    <br> <br> 

  </div> 


  <br> <br>

  <div class="row">
  <div class="col-md-3">
    <div class="card bg-primary" style="width: 100%;">
      <div class="card-body">
        <h5 class="card-title">New Subjects</h5>
        <p class="card-text"></p>
        <a href="{{ route('admin.add_subjects') }}" class="btn btn-dark">Add</a>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card bg-primary" style="width: 100%;">
      <div class="card-body">
        <h5 class="card-title">New Course Units</h5>
        <p class="card-text"></p>
        <a href="{{ route('admin.add_course_units') }}" class="btn btn-dark">Add</a>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card bg-primary" style="width: 100%;">
      <div class="card-body">
        <h5 class="card-title">New Results</h5>
        <p class="card-text"></p>
        <a href="" class="btn btn-dark">Add</a>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card bg-primary" style="width: 100%;">
      <div class="card-body">
        <h5 class="card-title">Levels & Semesters</h5>
        <p class="card-text"></p>
        <a href="{{ route('admin.level_list') }}" class="btn btn-dark">Add</a>
      </div>
    </div>
  </div>
</div>



 <br> <br> <br> <br> 

  <div class="row">
    <div class="col-sm-6">
      <div class="card bg-primary">
        <div class="card-body">
          <h5 class="card-title"> Lecturers </h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-dark"> Add </a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card bg-primary">
        <div class="card-body">
          <h5 class="card-title"> Demonstrators </h5>
          <p class="card-text"></p>
          <a href="" class="btn btn-dark">Add </a>
        </div>
      </div>
    </div>
  </div>



</div> 



@endsection














