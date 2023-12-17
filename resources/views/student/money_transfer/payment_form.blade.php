<html>
   

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

<body>
  



<!-- JQUERY STEP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
<div class="wrapper11">
    <form  method="post" action="{{     route('repeats.store')   }}"  enctype="multipart/form-data">
        @csrf
        <h1 style="text-align: center;">UNIVERSITY OF RUHUNA - MATARA</h1>
            <h2 style="text-align: center;">Paying in Voucher</h2>
        <div id="wizard11">

            <!-- SECTION 1 --> 
          
            <section>
        
                <div class="form-row">
                <label for="full_name" >Full Name:</label>
                     <input type="text" name="full_name" class="form-control" placeholder="Rasika Chathurangi Ariyathilaka" required>
                </div>
                <div class="form-row">
                <label for="full_name" >Student Number:</label>
                     <input type="text" name="student_num" class="form-control" placeholder="SC/2019/10863" required>
                </div>
                <div class="form-row">
                <label for="full_name" >Address:</label>
                     <input type="text" name="address" class="form-control" placeholder="NO 23. Flower Road, Colombo" required>
                </div>
                <div class="form-row">
                <label for="full_name" >Amount:</label>
                     <input type="text" name="amount" class="form-control" placeholder="Amount" required>
                </div>

                <!-- degree in dropdown -->

                <div class="dropdown">
                <label for="degree">Choose a degree:</label>
                    <select name="degree" id="degree">
                    <option name="degree" class="dropdown-btn" value="Basic Degree">Basic Degree</option>
                    <option name="degree" class="dropdown-btn" value="Postgraduation Degree">Postgraduation Degree</option>
                    </select>
                </div>

                        <!-- degree in checkbox 
                                <div class="row g-3 align-items-center" style="padding: 1.5%;">
                                    <div class="col-md-2">
                                     <label for="inputPassword6" class="col-form-label">Choose a degree:</label>
                                    </div>

                                    <div class="row g-3 align-items-center" style="padding: 1.5%;">
                                        <div class="col-md-2">
                                        <input class="form-check-input" type="checkbox" name="degree[]" value="Basic Degree" id="flexCheckBasic">
                                        <label class="form-check-label" for="flexCheckBasic">Basic Degree</label>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-check-input" type="checkbox" name="degree[]" value="Postgraduation Degree" id="flexCheckPostgraduation">
                                            <label class="form-check-label" for="flexCheckPostgraduation">Postgraduation Degree</label>
                                        </div>
                                        
                                     </div>
                                </div>
                        -->


                <div class="form-row">
                <label for="description" >Course Unit Name and code:</label>
                    <textarea name="description" rows="10" class="form-control" placeholder="Note about Course Units" style="height: 108px">
                    </textarea> 
                </div>
            </section>
            
            
            </div>
    
            
            <!-- SECTION 4 -->
            <section>
                <div class="btn1"> 
                    <button class="btn_sub " type="submit">Submit</button>
                </div>
            </section>
            </form>
            <section>
                 <!-- 
            <div class="btn1"> 
                    <button  id="print">Print</button>
                </div> 
            </section>  -->
           
       
</div>
<script>

const printBtn=document.getElementById('print');
printBtn.addEvenListener('click',function(){
    window.print();
})


</script>
</body>
</x-app-layout>
</html>

