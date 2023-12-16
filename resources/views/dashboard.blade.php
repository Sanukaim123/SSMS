
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
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 5s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 2s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
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
                <a href='/abc' class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-bell me-2"></i> Registration</a>
                <a href="{{route('join_table')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Results and GPA </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-calendar me-2"></i> Attendance</a> 
                <a href="{{route('student.money_transfer.payment_home')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-credit-card me-2"></i>Pay for Repeat Exams </a>
                <a href="{{route('noti.display')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-bell me-2"></i> Notification</a> 
                <a href="studentfeedback" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-bell me-2"></i> Feedback</a> 
                <a href="{{route('chat.form')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-comment me-2"></i>Messages</a> 
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">  




 <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://media.licdn.com/dms/image/C4E1BAQGUGhRlEXo2-Q/company-background_10000/0/1583866513572?e=2147483647&v=beta&t=bmzRHs1Jf9PWiFAgGz0XrHbsmjvOFDQCfw-Tcn7oZvQ" style="width:25cm; height:15cm;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <div class="text"></div>  <img src="https://www.sci.ruh.ac.lk/computer/img/slider/slider12.jpg" style="width:25cm; height:15cm;">

</div>

<div class="mySlides fade">

  <img src="https://www.lib.ruh.ac.lk/wp-content/uploads/2023/10/DSC02886.jpg" style="width:25cm; height:15cm;">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
<span class="dot"></span>
<span class="dot"></span>
<span class="dot"></span>
</div25
        <!-- Page Content -->
        
    </div>
               

                

            </nav>
           <!-- <p>User ID: {{ auth()->user()->id }}</p>  --> 
            
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

<script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 4000); // Change image every 2 seconds
        }
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


