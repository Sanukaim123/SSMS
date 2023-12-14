<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>

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
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
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
    
    
<x-app-layout>
   



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
                
                <a href="{{url('/notification')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-bell me-2"></i> Notifications</a> 
                <a href="studentfeedback" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-bell me-2"></i> Feedback</a> 
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-comment me-2"></i> Messages</a> 
               
            </div>
        </div>
        <!-- /#sidebar-wrapper -->


        <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://cdn.pixabay.com/photo/2017/08/01/00/38/man-2562325_1280.jpg" style="width:35cm; height:20cm;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://cdn.pixabay.com/photo/2015/07/31/11/45/library-869061_1280.jpg" style="width:30cm; height:20cm;">
  <div class="text">Caption Two</div>
</div20
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://cdn.pixabay.com/photo/2016/11/08/05/10/students-1807505_640.jpg" style="width:30cm; height:20cm;">
  <div class="text">Caption Three</div>
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


    










</head>
<body>












    


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
        setTimeout(showSlides, 3000); // Change image every 2 seconds
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







</body>
</html>