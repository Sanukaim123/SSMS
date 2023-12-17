<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/>


<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                               
                                <h3> Your Details </h3><br><br><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                              
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                       
                                        @foreach($stprofiles as $stprofile)
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;" >Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                             {{$stprofile->fullname}}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;" >Registration No</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            
                                            {{$stprofile->registration_no}}
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;" >Level</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            
                                            {{$stprofile->level}}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;" >Semester</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{$stprofile->semester}}
                                                
                                            </div>
                                        </div>
                                        <hr />
                                      @endforeach

                                      
                        <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <a href ="{{route('stprofiles.stedit',['stprofile' => $stprofile])}}">Edit</a>
                
                                </div>
                        </div>
                                  
                                    </div>
                                    
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>