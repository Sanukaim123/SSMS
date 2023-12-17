<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suraj chatbox</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #e96443, #904e95);
        }

        .card {
            width: 90%;
            max-width: 440px;
            color: #fff;
            text-align: center;
            padding: 50px 35px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        .field {
      width: 100%;
      height: 15vh;
      box-sizing: border-box;
      margin-bottom: 15px;
    }

    .btn{
    display: inline-block;
    background: #ff523b;
    color: #fff;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius: 30px;
    transition: background 0.5s;
}

.btn:hover{
    background: #44baec;
}
    </style>
</head>
<body>
<BR>
    <div class="card" data-tilt>
        <form action="{{ route('chat.submit') }}" method="POST">
    @csrf
            <br><label for="Name">Name:</label></br>
            <label for="Name">Name:</label>
            <input type="text" id="Name" name="Name">
			
			<!-- <label for="Name">Name:</label>
            <input type="text" id="Name" name="Name"> -->

            <label for="Email">Email:</label>
            <input type="text" id="Email" placeholder="example@gmail.com" name="Email">

            <label for="Level">Select your Level</label>
            <select id="Level" name="Level">
                <option value="MACO">Level 1</option>
                <option value="MACH">Level 2</option>
                <option value="MAPH">Level 3</option>
                <option value="MCHE">Level 4</option>
            </select>

            <label for="Semester">Select your Semester</label>
            <select id="Semester" name="Semester">
                <option value="MACO">Semester 1</option>
                <option value="MACH">Semester 2</option>
            </select>

            <label for="Department">Select Department</label>
            <select id="Department" name="Department">
                <option value="level 1">Maths</option>
                <option value="level 2">Chemistry</option>
                <option value="level 3">Physics</option>
                <option value="level 4">Computer Science</option>
            </select>

            <label for="Demonstrator">Select Demonstrator</label>
            <select id="Demonstrator" name="Demonstrator">
                <option value="sem1">Thisara</option>
                <option value="sem2">Lavannya</option>
                <option value="sem2">Pawani</option>
                <option value="sem2">Rasika</option>
                <option value="sem2">Sehani</option>
                <option value="sem2">Sanuka</option>
            </select>

            <label for="Message">Enter Message:</label>
            <textarea class="field area" placeholder="Message" name="Message"></textarea>

            <button type="submit" class="btn">Send &#8594;</button>
</form>
    </div>
</body>
</html>
