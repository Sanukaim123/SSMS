<html>

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
    
        <link rel="stylesheet" href="{{ asset('CSS/form1.css') }}">
        <title>Form</title>
    </head>
<body>


<!-- resources/views/money_transfer/form.blade.php -->
<div class="st">
<form method="POST" action="{{ route('payment') }}">
    @csrf
    <table>
    <!-- Recipient Email -->
    <label for="recipient_email">Recipient Email:</label>
    <input type="email" name="recipient_email" id="recipient_email" required>
    <br><br>
    <!-- Amount -->
    <label for="amount">Amount:</label>
    <input type="number" name="amount" id="amount" required>
    <br><br>
    <!-- Description -->
    <label for="description">Description:</label>
    <input type="text" name="description" id="description">
    <br><br>
    <!-- Submit Button -->
    <button type="submit">Transfer Money</button>
    </table>
</form>
</div>
</body>
</x-app-layout>
</html>