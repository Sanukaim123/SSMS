<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{ asset('CSS/form1.css') }}">
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
                    <h1>University of Ruhuna Online Payments</h1><br>
                        <h2>Payment Types</h2><br>
                        <div class="pay">
                                  <!--  <a class="btn btn-success" href="{{ route('student.money_transfer.payment_form') }}">Repeat fees</a>
                                        <br><br><br>
                                    <a class="btn btn-success">Registartion fees</a>
                                    <br><br><br>
                                    <a class="btn btn-success">Hostal fees</a> -->  
                                    @foreach($fees as $fee)
                                        <a class="btn btn-success">{{ $fee->fee_type }} </a>
                                    @endforeach
                                    
            
                        </div>
        </div>
   </div>
</body>
</html>
