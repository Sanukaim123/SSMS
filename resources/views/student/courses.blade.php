<!DOCTYPE html>
<head>
<link rel="stylesheet" href="{{asset('CSS/custom.css')}}"/>
	<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css/>  
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	
	<style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins' , sans-serif;
}
body{
    min-height: 100vh;
    background: linear-gradient(to right, #e96443, #904e95);
}
a{
    text-decoration: none;
}
li{
    list-style: none;
}
h1,h2{
    color: #1c0310;
}
.side-menu{
    position:fixed;
    background: #c56ca6; 
    width: 20vw;
    min-height:100vh ; 
    display: flex;
    flex-direction: column;
}

.side-menu .brand-name{
    height:10vh;
    display:flex;
    align-items: center;
    justify-content: center;
    
}
.side-menu li{
    font-size: 20px;
    padding: 10px 50px;
    color: #df54b1cc;
    display:flex;
    align-items:center;
    

}
.side-menu li:hover{
    background: white;  
    color: #b43e8c;
}


    </style>
</head>

<nav id="navbar">
		<div class="navdiv">
			<div class="main-topic"><a href="#">Students' Self Study-Management System</a>
			<br>

				<div class="sub-topic">SSMS</div>
				
			</div>
			<ul>
				<li><a href="home">Home</a></li>
				<li><a href="">About</a></li>
				<li><a href="Contact">Contact</a></li>
				
				
			</ul>
		</div>
	</nav>
</head>
<body>
<br>
<div class="page-content">  
<!--features-->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 d-flex justify-content-center align-items-center">
      <div class="card text-center">
        <div class="card-body d-flex flex-column align-items-center justify-content-center">
          <h5 class="card-header">Combination 01</h5> <br> 
          <a href="/student/subject/math" class="btn btn-primary btn-custom btn-lg" style="width: 10cm; height: 2cm;">Mathematics</a> <br> <br> 
          <a href="/student/subject/applied" class="btn btn-primary btn-custom btn-lg" style="width: 10cm; height: 2cm;">Applied Mathematics</a> <br> <br> 
          <a href="/student/subject/cs" class="btn btn-primary btn-custom btn-lg" style="width: 10cm; height: 2cm;">Computer Science</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center align-items-center">
  <div class="card text-center">
    <div class="card-body d-flex flex-column align-items-center justify-content-center">
      <h5 class="card-header">Combination 02</h5> <br> 
      <a href="/student/subject/math" class="btn btn-success btn-custom btn-lg text-white" style="width: 10cm; height: 2cm;"> Mathematics </a> <br> <br> 
      <a href="/student/subject/physics" class="btn btn-success btn-custom btn-lg text-white" style="width: 10cm; height: 2cm;">Physics</a> <br> <br> 
      <a href="/student/subject/cs" class="btn btn-success btn-custom btn-lg text-white" style="width: 10cm; height: 2cm;">Computer Science </a>
    </div>
  </div>
</div>

<div class="col-md-4 d-flex justify-content-center align-items-center">
  <div class="card text-center">
    <div class="card-body d-flex flex-column align-items-center justify-content-center">
      <h5 class="card-header">Combination 03</h5> <br> 
      <a href="/student/subject/math" class="btn btn-info btn-custom btn-lg text-white" style="width: 10cm; height: 2cm;">Mathematics</a> <br> <br> 
      <a href="/student/subject/chem" class="btn btn-info btn-custom btn-lg text-white" style="width: 10cm; height: 2cm;">Chemistry</a> <br> <br> 
      <a href="/student/subject/cs" class="btn btn-info btn-custom btn-lg text-white" style="width: 10cm; height: 2cm;">Computer Science </a>
    </div>
  </div>
</div>
<br><br><br><br><br>
<br>
<br>
<br>
<br><br><br><br>
<br><br><br><br><br>
<br>
<br>
<br>
<br><br><br><br>

<div id="footer" style="background-color: #333; padding: 10px; text-align: center;  bottom: 0; width: 100%;">


<p>&copy; 2024 Self study Management system</p>


<li><a href="https://example.com">UOR Oficial Web</a></li>
<li><a href="https://example2.com">UOR Library</a></li>
<li><a href="https://example3.com">LMS</a></li>
<li><a href="https://example3.com">FOSMIS</a></li>

</div>
</div>

</body>
</html>