<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <!-- Bootstrap core CSS -->
    <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />
    <!-- core:css -->
	<link rel="stylesheet" href="../../../assets/vendors/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="../../../assets/vendors/prismjs/themes/prism.css">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="../../../assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="../../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="../../../assets/css/demo2/style.css">
  <!-- End layout styles -->
    <style>
         body{
            background-color:fff;
         }
         /* tr{
            font-size: 20px;
            }
            .button1{
            font-size: 20px;
            background-color: #c974c2;
            color: #3d063e;
            } */
    </style>    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <h2>Add User</h2>
            </div>
        </div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }} . Please Try Again.
            </div>
        @endif
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h6 class="card-title">Add User Form</h6>
                    <form action="" method="post" id="adduser">
                        @csrf 
                        <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="" placeholder="Enter Name" required>
                        </div>

                        <div class="mb-3">
                        <label for="username" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="username" name="username" value="" placeholder="Enter User Name">
                        </div>
            
                        <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="" placeholder="Enter Email" required>
                        </div>
            
                        <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="" placeholder="Enter Password" required>
                        </div>
        
                        <div class="mb-3">
                        <label for="role" class="form-label">Select Role</label>
                        <select class="form-select" id="role" name="role">
                            <option selected disabled>Selethe Role</option>
                            <option value="lecturer">Lecturer</option>
                            <option value="demostrator">Demostrator</option>
                            <option value="student">Student</option>
                        </select>
                        </div>
            
                        <div class="mb-4">
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="status" value="active" id="status1">
                            <label class="form-check-label" for="status1">
                            Active
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="status" value="inactive" id="status0">
                            <label class="form-check-label" for="status0">
                            Inactive
                            </label>
                        </div>
                        </div>
            
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- <form action="" method="post" id="adduser">
    @csrf
        <table>
            <tr>
                <td>Enter Name </td>
                <td><input type="text" id="name" name="name" value=""></td>
            </tr>
            <tr>
                <td>Enter Username </td>
                <td><input type="text" id="username" name="username" value=""></td>
            </tr>
            <tr>
                <td>Enter Email </td>
                <td><input type="text" id="email" name="email" value=""></td>

            </tr>
            <tr>
                <td>Enter Password</td>
                <td><input type="text" id="password" name="password" value=""></td>
            </tr>
            <tr>
                <td>select the role </td>
                <td>
                     <select id="role" name="role">
                     <option value="lecturer">Lecturer</option>
                     <option value="demostrator">Demostrator</option>
                     <option value="student">Student</option>
                     </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                     <select id="status" name="status">
                     <option value="active">Active</option>
                     <option value="inactive">Inactive</option>
                     </select>
                </td>
            </tr>
        </table>  
        <button class="button button1" type="submit">Add User</button>  
    </form>    -->
</body>
</html>