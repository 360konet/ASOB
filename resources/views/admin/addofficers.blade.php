@extends('admin.layout.header')
@section('headers')
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('/officers-portal')}}">Officers</a></li>
                            <li class="breadcrumb-item"><a href="#!">Add Officer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Officers</h5>
                    </div>
                    <div class="card-body">
                        <h5>Personal Details</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                 <form method="POST" action="{{url('/add-officers')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Rank<b style="color:red;">*</b></label>
                                        <select class="mb-3 form-control" name="rank" id="rank"required>
                                        <option>--Select rank--</option>
                                        <option value="2/Lt">2/Lt</option>
                                        <option value="Lt">Lt</option>
                                        <option value="Capt">Capt</option>
                                        <option value="Maj">Maj</option>
                                        <option value="Lt Col">Lt Col</option>
                                        <option value="Col">Col</option>
                                        <option value="Brig Gen">Brig Gen</option>
                                        
                                        </select>
                                    </div>
                                    <div class="form-group">
                                         <label for="exampleInputEmail1">Profile Picture{{--<b style="color:red;">*</b>--}}</label> 
                                        <input type="file" name="image" class="form-control" aria-describedby="emailHelp" placeholder="name.jpg">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Full Name<b style="color:red;">*</b></label>
                                        <input type="text" name="fname" class="form-control" placeholder="Enter first name" required>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Service Number<b style="color:red;">*</b></label>
                                        <input type="text" name="service" class="form-control" placeholder="Enter service number" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Gender<b style="color:red;">*</b></label>
                                    <select class="mb-3 form-control" name="gender" required>
                                        <option>--Select Gender--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    </div>
                                      
                                    <div class="col-md-6">
                                        <label for="exampleInputPassword1">Date Of Birth (DoB)</label>
                                        <input type="date" class="form-control" name="dob" placeholder="Select date" >                                    
                                    </div>                                 
                            </div>

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" name="location" class="form-control" placeholder="Enter location">
                                    </div>                                
                            </div>
                        </div>
                        <h5 class="mt-5">Other Info</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Driving License</label>
                                  <select class="mb-3 form-control" name="license">
                                    <option>No</option>
                                    <option>Yes</option>
                                 </select>                                          
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Type of Driver</label><br>
                                 <select class="mb-3 form-control" name="driver_type[]" multiple>
                                   <option value="">N/A</option>
                                    <option>Basic Driver</option>
                                    <option>Motorcycle Rider</option>
                                    <option>4X4 Driver(Manual)</option>
                                    <option>TCV Driver</option>
                                 </select>   

                            </div>
                            <div class="col-md-6">
                            <br>
                                <label for="exampleInputPassword1">Date of Postings</label>
                                 <input type="date" class="form-control" name="dop" placeholder="Select date" >                                    
                            </div>
                            <div class="col-md-6">
                            <br>
                                <label for="exampleInputPassword1">Unit Posted From<b style="color:red;">*</b></label>
                                 <input type="text" class="form-control" name="unit" placeholder="" required>                                    
                            </div>
                            <div class="col-md-6">
                            <br>
                                <label for="exampleInputPassword1">Potential Instructor</b></label>
                                 <select class="mb-3 form-control" name="instr">
                                    <option>No</option>
                                    <option>Yes</option>
                                 </select>                           
                            </div>
                            
                            
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Exercises</label>
                                 <textarea type="text" name="exercise" class="form-control" placeholder="Enter region" > </textarea>                                    
                            </div>
                        </div>
                        <hr>
                        <h5 class="mt-5">Contact Details</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
    
                                    <div class="form-group ">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Phone Number(s)<b style="color:red;">*</b></label>
                                        <div class="col-sm-9">
                                            <textarea type="text" name="phone" class="form-control" placeholder="Enter phone number(s) of officer" onkeypress="return isNumberKey(event)" required></textarea>
                                        </div>
                                    </div>
                            </div>
                            <script>
                             function isNumberKey(event) {
                             var charCode = (event.which) ? event.which : event.keyCode;
                             if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                             return false;
                             }
                             return true;
                            }
                           </script>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Emergency Contact Name</b></label>
                                 <input type="text" name="kin" class="form-control" placeholder="Enter next of kin" >                                    
                            </div>
                       
                        
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Relation</label>
                                <input type="text" name="relation" class="form-control" placeholder="Enter kin relation">                  
                            </div>
                           
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Phone Number(Emergency contact)</label>
                                 <input type="text" name="kphone" class="form-control" placeholder="Enter kin phone" onkeypress="return isNumberKey(event)" >                                    
                            </div>
                        </div>
                        <hr>
                        <h5 class="mt-5">Commisioning and Promotion</h5>
                        <hr>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Commission Date</label>
                                    <input type="date" name="commission" class="form-control" placeholder="Select commission date">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Promotion Date</label>
                                    <input type="date" name="promotion" class="form-control" placeholder="Select last promotion date">
                                </div>
                            </div>
                        <div class="row">
                            
                            <div class="col-md-6">
                                <h5 class="mt-5">Recommendation</h5>
                                <hr>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Recommendation</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" name="recommend" class="form-control" placeholder="Enter additional info"></textarea>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mt-5">Remarks/Comments</h5>
                                <hr>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Remarks</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" name="remarks" class="form-control" placeholder="Enter additional info"></textarea>
                                        </div>
                                    </div>
                            </div>
                        </div>
                                <div class="input-group cust-file-button">
                                    <div class="custom-file">
                                    <a href="{{url('/officers-portal')}}">Cancel</a>
                                    </div>
                                    
                                    <div class="input-group-append">
                                        <button class="btn  btn-primary" type="submit" value="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->
@endsection