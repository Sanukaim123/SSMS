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
                     <input type="text" name="full_name" class="form-control" placeholder="Johne Alexsender" required>
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

                <div class="dropdown">
                <label for="degree">Choose a degree:</label>
                    <select name="degree" id="degree">
                    <option class="dropdown-btn" value="basic">Basic Degree</option>
                    <option class="dropdown-btn" value="post">Postgraduation Degree</option>
                    </select>
                </div>



                <div class="form-row">
                <label for="description" >Course Unit Name and code:</label>
                    <textarea name="description" rows="10" class="form-control" placeholder="Note about Course Units" style="height: 108px">
                    </textarea> 
                </div>
            </section> 
            
            <!-- SECTION 2 -->
            

                

                        
                </fieldset>
                <br>
                <div>
                    <input type="file" name="file">
                </div>
                        

                
                </div>
            </section>
            
            
            <!-- SECTION 4 -->
            <section>
                <div class="btn1"> 
    
                    <button class="btn_sub" type="submit">Submit</button>
                
                </div>

                
                
            </section>
        
        </div>
    </form>
</div>
</body>
</html>

