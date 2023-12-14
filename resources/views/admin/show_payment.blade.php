<style>
   table, th, td {
     
     border: 1px solid grey;
     border-collapse: collapse;
     padding: 5px;
     text-align: left;
   }
   
    </style>
<div class="container">
        <h1> Examination Payments</h1>
        <table style="width:60%">
        <tr>
    <th>Name</th>
    <th>Student Number</th>
    <th>Address</th>
    <th>Amount</th>
    <th>Degree</th>
    <th>Description</th>
    <th>File</th>
  </tr>
  @foreach($repeats as $repeat)
            <div class="payment-card">
  <tr>
    <td>{{ $repeat->full_name }}</td>
    <td>{{ $repeat->student_num }}</td>
    <td> {{ $repeat->address }}</td>
    <td>{{ $repeat->amount }}</td>
    <td>{{ $repeat->degree }}</td>
    <td>{{ $repeat->description }}</td>
    <td>{{ $repeat->file }}</td>
  </tr>
  @endforeach
            </div>
</table>

        
               <!-- <h2>{{ $repeat->full_name }}</h2>
                <p>Student Number: {{ $repeat->student_num }}</p>
                <p>Address: {{ $repeat->address }}</p>
                <p>Amount: {{ $repeat->amount }}</p>
                <p>Degree: {{ $repeat->degree }}</p>
                <p>Description: {{ $repeat->description }}</p>
                 Add more fields as needed -->

       

</body>
</html>

    

