<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><b>Attendance Summary</b></li>

</ol>

<div class="row">

    <div class="col-xl-3 col-md-3">
        <div class="card bg-secondary text-white mb-4">
            <div class="card-body">
                 Number Of Students
                <h5>{{$students}}</h5>
</div>
<div class="card-footer d-flex align-items-center justify-content-between'>

<div class="small text-white"><i class="fas- fa-angle-right"></i></div>
</div>
</div>


<div class="col-xl-3 col-md-3">
        <div class="card bg-info text-white mb-4">
            <div class="card-body">
                 Number Of 
                <h5>{{$products}}</h5>
</div>
<div class="card-footer d-flex align-items-center justify-content-between'>

<div class="small text-white"><i class="fas- fa-angle-right"></i></div>
</div>
</div>

<div class="col-xl-3 col-md-3">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">
                Number Of Lecture Hours
                <h5>{{$products1}}</h5>
</div>
<div class="card-footer d-flex align-items-center justify-content-between'>

<div class="small text-white"><i class="fas- fa-angle-right"></i></div>
</div>
</div>
<div class="col-xl-3 col-md-3">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">
                Eligible Total
                <h5>...</h5>
</div>
<div class="card-footer d-flex align-items-center justify-content-between'>

<div class="small text-white"><i class="fas- fa-angle-right"></i></div>
</div>
</div>
</div>
</div>    
</br>
</br>
<div class="col-xl-3 col-md-3">
        <div class="card bg-info text-white mb-4">
            <div class="card-body">
                 Number Of 
                <h5><a href="{{url('/last')}}">Attendance Report</a></h5>
</div>
<div class="card-footer d-flex align-items-center justify-content-between'>

<div class="small text-white"><i class="fas- fa-angle-right"></i></div>
</div>
</div>

</body>
</html>

    