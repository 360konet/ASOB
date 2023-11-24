@include('admin.layout.header')
	
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('/civilians-portal')}}">Civilians</a></li>
                            <li class="breadcrumb-item"><a href="#!">Add Civilian</a></li>
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
                        <h5>Civilian</h5>
                    </div>
                    <div class="card-body">
                        <h5>Personal Details</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <form method="POST" action="{{url('/add-civilians')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Rank<b style="color:red;">*</b></label>
                                    <select class="mb-3 form-control" name="rank" required>
                                        <option>--Select rank--</option>
                                        <option value="Senior Staff">Senior Staff</option>
                                        <option value="Junior Staff">Junior Staff</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Profile Picture<b style="color:red;">*</b></label>
                                        <input type="file" name="image" class="form-control" aria-describedby="emailHelp" placeholder="Select profile picture" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">First Name<b style="color:red;">*</b></label>
                                        <input type="text" name="fname" class="form-control" placeholder="Enter first name" required>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Service Number<b style="color:red;">*</b></label>
                                        <input type="text" name="service" class="form-control" placeholder="Enter service number" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Last Name<b style="color:red;">*</b></label>
                                        <input type="text" name="lname" class="form-control" placeholder="Enter last name" required>
                                    </div>  
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Gender<b style="color:red;">*</b></label>
                                        <select class="mb-3 form-control" name="gender" required>
                                        <option>--Select Gender--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>                                  
                                  </div>                                   
                            </div>
                        </div>
                        <h5 class="mt-5">Other Info</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Nationality<b style="color:red;">*</b></label>
                                 <input type="text" name="nationality" class="form-control" placeholder="Enter nationality" required>                                    
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Hometown<b style="color:red;">*</b></label>
                                 <input type="text" name="hometown" class="form-control" placeholder="Enter hometown" required>                                    
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Date Of Birth (DoB)<b style="color:red;">*</b></label>
                                 <input type="date" name="dob" class="form-control" placeholder="Select date" required>                                    
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Blood Type<b style="color:red;">*</b></label>
                                <select class="mb-3 form-control" name="blood" required>
                                    <option>--Select blood type--</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>                            
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Region<b style="color:red;">*</b></label>
                                 <input type="text" name="region" class="form-control" placeholder="Enter region" required>                                    
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="mt-5">International Operations</h5>
                                <hr>
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">UN Operations</label>
                                     <textarea type="text" name="un" class="form-control" placeholder="Enter un operations"></textarea>                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mt-5">Course Registration</h5>
                                <hr>
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1"></label>
                                     <textarea type="text" name="course" class="form-control" placeholder="Enter courses"></textarea>                                    
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-5">Spouse And Kin Details</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Spouse Name(Leave if not married)</label>
                                 <input type="text" class="form-control" name="spouse" placeholder="Enter spouse name">                                    
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Next Of Kin<b style="color:red;">*</b></label>
                                 <input type="text" class="form-control" name="kin" placeholder="Enter next of kin" required>                                    
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Spouse Phone(Leave if not married)</label>
                                <input type="text" class="form-control" name="sphone" placeholder="Enter spouse phone" onkeypress="return isNumberKey(event)">                                    
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Kin Relation<b style="color:red;">*</b></label>
                                <input type="text" class="form-control" name="relation" placeholder="Enter kin relation" required>                  
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1"></label>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Kin Phone<b style="color:red;">*</b></label>
                                 <input type="text" class="form-control" name="kphone" placeholder="Enter kin phone" onkeypress="return isNumberKey(event)" required>                                    
                            </div>
                        </div>
                        <hr>
                        <h5 class="mt-5"></h5>Employment And Promotion</h5>
                        <hr>
                        
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Employment Date<b style="color:red;">*</b></label>
                                    <input type="date" name="employment" class="form-control" placeholder="Select commission date" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Promotion Date<b style="color:red;">*</b></label>
                                    <input type="date" class="form-control" name="promotion" placeholder="Select last promotion date" required>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="mt-5">Contact</h5>
                                <hr>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Phone number(s)<b style="color:red;">*</b></label>
                                        <div class="col-sm-9">
                                            <textarea type="text" name="phone" class="form-control" placeholder="Enter phone number(s) of civilian" onkeypress="return isNumberKey(event)" required></textarea>
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
                                        <a href="{{url('/civilians-portal')}}">Cancel</a>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn  btn-primary" type="submit" value="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
	<script src="assets/js/menu-setting.min.js"></script>




</body>

</html>
