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
     .table-error{
            color: red;
        }

    
    
    </style>


</head>

<body>
    <div class="d-flex" id="wrapper">
        
                
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
            @if ($errors->any())
    <div class="table-error">
        <p>Please Fill All The Question</p>
    </div>
@endif
          
            <section>
        
                <div class="@error('full_name') table-error @enderror">
                <label for="full_name" >Full Name:</label>
                     <input type="text" name="full_name" class="form-control" placeholder="Rasika Chathurangi Ariyathilaka" required>
                </div>
                <div class="@error('student_num') table-error @enderror">
                <label for="full_name" >Student Number:</label>
                     <input type="text" name="student_num" class="form-control" placeholder="SC/2019/10863" >
                </div>
                <div class="@error('address') table-error @enderror">
                <label for="full_name" >Address:</label>
                     <input type="text" name="address" class="form-control" placeholder="NO 23. Flower Road, Colombo" >
                </div>
                <div class="@error('amount') table-error @enderror">
                <label for="full_name" >Amount:</label>
                     <input type="text" name="amount" class="form-control" placeholder="Amount" required>
                </div>

                <!-- degree in dropdown -->

                <div class="@error('degree') table-error @enderror">
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


                <div class="@error('description') table-error @enderror">
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

