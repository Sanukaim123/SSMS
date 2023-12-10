<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{ asset('CSS/form1.css') }}">
    <title>Sample Form</title>
</head>
<body>
@foreach($forms as $fd)
    <h1>UNIVERSITY OF RUHUNA - MATARA</h1>
    <h2>Paying in Voucher</h2>
    <form action="" method="get">
       
        <label for="name" value="{{$fd->full_name}}">Name:</label>
        <br>
        <br>

        
        <label for="student_num" value="{{$fd->student_num}}">Student Number:</label>
        <br>
        <br>

        
        <label for="address" value="{{$fd->address}}">Address:</label>
        <br>
        <br>

        <label for="amount" value="{{$fd->amount}}">Amount:</label>
        <br>
        <br>
        @endforeach
        <input type="submit" value="Edit">
    </form>
</body>
</html>
