<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <title>Document</title>
</head> 

<body class="container mt-5" style="background: linear-gradient(212.38deg, rgba(242, 57, 127, 0.7) 0%, rgba(175, 70, 189, 0.71) 100%);">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Edit Profile Information</h1>

            <p class="mt-1 text-sm text-gray-600">
                {{ __("Update your full name, registration no, level, and semester.") }}
            </p>

            <form class="form-horizontal" method="post" action="{{route('stprofile.store')}}">
                @csrf
                @method('post')

                <div class="form-group row">
                    <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fullname" placeholder="Full Name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="registration_no" class="col-sm-2 col-form-label">Registration No</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="registration_no" placeholder="Registration No">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="level" class="col-sm-2 col-form-label">Level</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="level" placeholder="Level">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="semester" class="col-sm-2 col-form-label">Semester</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="semester" placeholder="Semester">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>


</html>
