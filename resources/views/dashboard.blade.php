
<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" >
            {{ __('Dashboard') }}
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
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class=""></i>SSMS</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="{{route('student.courses')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-star me-2"></i> Syllabus </a>
                <a href="" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-book me-2"></i>My Courses </a>
                <a href="{{route('register')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-bell me-2"></i> Registration</a>
                <a href="{{route('join_table')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Results and GPA </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-calendar me-2"></i> Attendance</a> 
                <a href="{{route('student.money_transfer.payment_home')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-credit-card me-2"></i>Pay for Repeat Exams </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-bell me-2"></i> Notifications</a> 
                <a href="studentfeedback" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-bell me-2"></i> Feedback</a> 
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a> 
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
               

                

            </nav>

            
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


