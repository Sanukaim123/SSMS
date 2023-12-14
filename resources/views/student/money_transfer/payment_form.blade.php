<html>
    <head>
        <link rel="stylesheet" href="{{ asset('CSS/form1.css') }}">
        <title>Form 1</title>
    </head>
<body>
  



<!-- JQUERY STEP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
<div class="wrapper">
    <form  method="post" action="{{     route('repeats.store')   }}"  enctype="multipart/form-data">
        @csrf
        <h1>UNIVERSITY OF RUHUNA - MATARA</h1>
            <h2>Paying in Voucher</h2>
        <div id="wizard">

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
                    <button class="btn_sub" type="submit">Submit</button>
                </div>
            </section>
            </form>
            <section>
            <div class="btn1"> 
                    <button  id="print">Print</button>
                </div> 
            </section>
           
       
</div>
<script>

const printBtn=document.getElementById('print');
printBtn.addEvenListener('click',function(){
    window.print();
})


</script>
</body>
</html>

