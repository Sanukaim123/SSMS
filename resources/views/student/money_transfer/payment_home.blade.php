<!DOCTYPE html>
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
    <style>
    

    
    
    </style>


</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
               </nav>

               <title>Payment Types</title>

<script>
    function navigateTo(page) {
        window.location.href = page;
    }
</script>
</head>
<body>
<div class="pay-home">
    <div class="card">
        
        <br>
                <h1 style="text-align: center;">University of Ruhuna Online Payments</h1><br>
                    <h2  style="text-align: center;">Payment Types</h2><br>
                    <div class="pay">
                               
                    <div style="text-align: center;">
    <a class="btn btn-success" href="{{ url('/student/money_transfer/payment_form') }}" style="width: 7cm; margin-bottom: 10px; display: inline-block;">Repeat Fees</a>
    <br><br>
    <a class="btn btn-success" style="width: 7cm; margin-bottom: 10px; display: inline-block;">Registration Fees</a>
    <br><br>
    <a class="btn btn-success" style="width: 7cm; margin-bottom: 10px; display: inline-block;">Hostel Fees</a>
    <br><br>
    <a class="btn btn-success" style="width: 7cm; margin-bottom: 10px; display: inline-block;">Library Fees</a>
    <br><br>
    <a class="btn btn-success" style="width: 7cm; margin-bottom: 10px; display: inline-block;">Medical Fees</a>
</div>

<br> <br> 

        
                    </div>
    </div>
</div>




            
        </div>
    </div>





    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>

<div id="footer" style="background-color: #333; padding: 10px; text-align: center;  bottom: 0; width: 100%;">


<p>&copy; 2024 Self study Management system</p>


<li><a href="https://example.com">UOR Oficial Web</a></li>
<li><a href="https://example2.com">UOR Library</a></li>
<li><a href="https://example3.com">LMS</a></li>
<li><a href="https://example3.com">FOSMIS</a></li>

</div>
    </body>
</x-app-layout>




