<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Navigation Bar</title>


	<link rel="stylesheet" href="{{asset('CSS/custom.css')}}"/>
	<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css/>
	
    
	
</head>

<body >
	<nav id="navbar">
		<div class="navdiv">
			<div class="main-topic"><a href="#">Students' Self-Management System</a>
			<br>

				<div class="sub-topic">SSMS</div>
				
			</div>
			<ul>
				<li><a href="home">Home</a></li>
				<li><a href="">About</a></li>
				<li><a href="Contact">Contact</a></li>
				<button><a href="{{route('register')}}">SignIn</a></button>
				<button><a href="{{route('login')}}">Login</a></button>
			</ul>
		</div>
	</nav>

<section id="Home">

	<h2>Enhance your Higher Education with SSMS </h2>
	<p>The University of Ruhuna has ten faculties: Agriculture, Engineering, Fisheries and Marine Sciences & Technology, Humanities and Social Sciences, Management and Finance, Medicine, Science, Graduate studies , Technology and Allied Health Sciences.</p>
	<div class="btn">
	
		<a class="blue" href="#">Learn More</a>
		

	</div>
	

</section>

<!--features-->
<section id="features">
	<h1>Awesome Features</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		<div class="fea-base">
			<div class="fea-box">
			<i class="fa-solid fa-graduation-cap"></i>
			<h3>Custom Courses</h3>
			<p>Professional responsive and retina ready template for online learning websites!</p>
			</div>

			<div class="fea-box">
			<i class="fa-solid fa-graduation-cap"></i>
			<h3>Awesome Lectures</h3>
			<p>Professional responsive and retina ready template for online learning websites!</p>
			</div>

			<div class="fea-box">
			<i class="fa-solid fa-user-graduate"></i>
			<h3>Library</h3>
			<p>Professional responsive and retina ready template for online learning websites!</p>
			</div>

			<div class="fea-box">
			<i class="fa-solid fa-user-graduate"></i>
			<h3>Special Degree Programme</h3>
			<p>Professional responsive and retina ready template for online learning websites!</p>
			</div>
			
		</div>
</section>
<!--Department-->
<Secttion id="department">
	<h1>Department</h1>
	<p>University of Ruhuna,Faculty of Science has five departments.
		They are Mathemetics,Physics,Chemistry,Computer Science</p>
		<div class=dep-box>

		</div>
</section>

<!--footer-->
<div id="footer">


        <p>&copy; 2024 Self study system</p>
    
    
        <li><a href="https://example.com">UOR Oficial Web</a></li>
        <li><a href="https://example2.com">UOR Libry</a></li>
        <li><a href="https://example3.com">LMS</a></li>
        <li><a href="https://example3.com">FOSMIS</a></li>
    
</div>




</body>
</html>