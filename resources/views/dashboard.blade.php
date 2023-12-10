<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
<div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class=""></i>SSMS</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-star me-2"></i> Syllabus </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-book me-2"></i>My Courses </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Results and GPA </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-calendar me-2"></i> Attendance</a> 
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-credit-card me-2"></i>Payments</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-bell me-2"></i> Notifications</a> 
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a> 
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h4 class="fs-2"></h4> <br> 
                                 <a href="" class="btn btn-primary"> Syllabus </a>   
                            </div>
                            <i class="fa fa-star  fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div> 
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h4 class="fs-2">  </h4> <br> 
                                <p> <button type="button" class="btn btn-success">My Courses</button> </p>
                            </div>
                            <i
                                class="fa fa-book fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div> 
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h4 class="fs-2">  </h4> <br> 
                                <p>  <button type="button" class="btn btn-success">  Results  </button> </p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h4 class="fs-2">  </h4> <br> 
                                <p>  <button type="button" class="btn btn-success"> Attendance</button> </p>
                            </div>
                            <i class="fa fa-calendar fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>   


                    <br> <br> 

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h4 class="fs-2"> </h4>
                                <p>  <button type="button" class="btn btn-success"></button> </p>
                            </div>
                            <i class=" fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h4 class="fs-2"></h4>
                                <p>  <button type="button" class="btn btn-success"></button> </p>
                            </div>
                            <i
                                class=" fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h4 class="fs-2"></h4>
                                <p>  <button type="button" class="btn btn-success"></button> </p>
                            </div>
                            <i class=" fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h4 class="fs-2"></h4>
                                <p>  <button type="button" class="btn btn-success"></button> </p>
                            </div>
                            <i class=" fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
               


            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>


</x-app-layout>
