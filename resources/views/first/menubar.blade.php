<!DOCTYPE html>
<html>
    <head>
  <link rel="stylesheet" href="{{asset('cssfile/menubar.css')}}">
</head>
<body>
<div class="sidebar">
<a class="active" href="">Dashboard</a>
  <a href="{{url('/student1')}}">Add Student</a>
  <a href="{{url('/product')}}">Add Schedule</a>
  <a href="{{url('/ind')}}">Add Attendance</a>
  <a href="{{url('/last')}}">Attendance Report</a>
</div>
<div class ="content">
<a href="{{url('/dash')}}">Summary</a>
</div>

</body>
</html>

<!-- Page content -->


    