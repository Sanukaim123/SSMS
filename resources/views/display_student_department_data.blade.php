<!DOCTYPE html>
<html>
<head>
    <title>Student Department Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            margin-bottom: 30px;
            color: #333;
        }

        p {
            margin-bottom: 10px;
            color: #555;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Subject GPA</h1>
        <div class="result">
            <p>Total Credit This Subject: <strong>{{ $sumCreditValues }}</strong></p>
           <!-- <p>Sum of GPA Totals for Subject: <strong>{{ $sumGPATotals }}</strong></p> -->
            <p>Average GPA for Subject: <strong>{{ $averageGPA }}</strong></p>
        </div>
    </div>
</body>
</html>
