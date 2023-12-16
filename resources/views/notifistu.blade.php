<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>


        .header{
            background: mediumpurple;
            height: 500vh;
        }
        
        .card{
            width: 95%;
            max-width: 3000px;
            color: #000;
            text-align: center;
            padding: 50px 35px;
            border: 1px solid rgba(255,255,255,0.3);
            background: plum;
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
<body>
    <div class="header">
        <div class="centered-container">
            <a href="" class="btn btn-dark mb-3 text-center">Tutorials</a>

            <div class="card" data-tilt>
                <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Subject</th>
                            <th>Course</th>
                            <th>Final Submission Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($notis as $noti)
                        <tr>
                            <td>{{ $noti->subject }}</td>
                            <td>{{ $noti->course }}</td>
                            <td>{{ $noti->final_submission_date }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>