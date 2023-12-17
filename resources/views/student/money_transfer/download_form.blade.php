<!DOCTYPE html>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" >
            
        </h2>
    </x-slot>
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" /> 
    <title>Student Dashboard</title> 

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('CSS/St_dashboard/st_dash.css')}}" />  

    <link rel="stylesheet" href="{{asset('CSS/custom.css')}}"/>
    
	<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css/>
    
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
</x-app-layout>
</html>
