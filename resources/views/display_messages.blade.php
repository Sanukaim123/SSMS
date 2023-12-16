<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>


        .header{
            background: radial-gradient(#fff,#5960de);
            height: 500vh;
        }
        
        .card{
            width: 95%;
            max-width: 3000px;
            color: #000;
            text-align: center;
            padding: 50px 35px;
            border: 1px solid rgba(255,255,255,0.3);
            background: rgba(255,255,255,0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0,0,0,0.1);
            backdrop-filter: blur(5px);
            margin-left: auto;
            margin-right: auto;
        
        }

        .centered-container {
            text-align: center;
        }

        
        </style>
</head>
<div class="header">
<body>
    <div class="centered-container">
    <a href="" class="btn btn-dark mb-3 text-center">Stored Messages</a>

    <div class="card" data-tilt>
   
        <table class="table table-hover text-center">
            <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->Name }}</td>
                    <td>{{ $message->Email }}</td>
                    <td>{{ $message->Message }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
