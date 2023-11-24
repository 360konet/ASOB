	
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
                            <li class="breadcrumb-item"><a href="{{url('/ranks-portal')}}">Soldiers</a></li>
                            <li class="breadcrumb-item"><a href="#!">Edit Soldier</a></li>
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
                        <h5>Soldier</h5>
                    </div>
                    <div class="card-body">
                        <h5>Personal Details</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                 <form method="POST" action="{{url('/rankedit/'.$editrank->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Rank<b style="color:red;">*</b></label>
                                        <select class="mb-3 form-control" name="rank" required>
                                        <option value="{{$editrank->rank}}">{{$editrank->rank}}</option>
                                        <option>--Change Rank--</option>
                                        <option value="Pte">Pte</option>
                                        <option value="L/Cpl">L/Cpl</option>
                                        <option value="Cpl">Cpl</option>
                                        <option value="Sgt">Sgt</option>
                                        <option value="SSgt">SSgt</option>
                                        <option value="WOII">WOII</option>
                                        <option value="WOI">WOI</option>
                                        <option value="SWOII">SWOII</option>
                                        <option value="SWOI">SWOI</option>
                                        
                                        </select>
                                    </div>
                                    @if($editrank->image)
                                    <img src="{{asset('ranks/'.$editrank->image)}}" style="border-radius: 100px;" name="image" height="150px" width="150px">
                                    @endif
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Profile Picture<b style="color:red;">*</b></label>
                                        <input type="file" name="image" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">First Name<b style="color:red;">*</b></label>
                                        <input type="text" name="fname" value="{{$editrank->fname}}" class="form-control" placeholder="Enter first name" >
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Service Number<b style="color:red;">*</b></label>
                                        <input type="text" value="{{$editrank->service}}" name="service" class="form-control" placeholder="Enter service number" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Gender<b style="color:red;">*</b></label>
                                    <select class="mb-3 form-control" name="gender" required>
                                        <option value="{{$editrank->gender}}">{{$editrank->gender}}</option>
                                        <option>--Change Gender--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="exampleInputPassword1">Date Of Birth (DoB)</label>
                                        <input type="text" class="form-control"value="{{$editrank->dob}} " name="dob" placeholder="Select date" >                                    
                                    </div>                                    
                            </div>

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" name="location" value="{{$editrank->location}}" class="form-control" placeholder="Enter location">
                                    </div>                                  
                            </div>
                        </div>
                        <h5 class="mt-5">Other Info</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Driving License</label>
                                  <select class="mb-3 form-control" name="license">
                                  <option value ="{{$editrank->license}}">{{$editrank->license}}</option>
                                    <option>No</option>
                                    <option>Yes</option>
                                 </select>                                          
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Type of Driver</label><br>

                                 <select class="mb-3 form-control" name="driver_type[]"  multiple>
                                  <option value= "N/A" {{ $editrank->driver_type == 'N/A' ? 'selected' : '' }}>N/A</option>
                                    <option value= "Basic Driver" {{ $editrank->driver_type == 'Basic Driver' ? 'selected' : '' }}>Basic Driver</option>
                                    <option value= "Motorcycle Rider" {{ $editrank->driver_type == 'Motorcycle Rider' ? 'selected' : '' }}>Motorcycle Rider</option>
                                    <option value= "4X4 Driver(Manual)" {{ $editrank->driver_type == '4X4 Driver(Manual)' ? 'selected' : '' }}>4X4 Driver(Manual)</option>
                                    <option value= "TCV Driver" {{ $editrank->driver_type == 'TCV Driver' ? 'selected' : '' }}>TCV Driver</option>
                                 </select>   

                            </div>
                            <div class="col-md-6">
                            <br>
                                <label for="exampleInputPassword1">Date of Postings</label>
                                 <input type="date" class="form-control" name="dop" value ="{{$editrank->dop}}" placeholder="Select date" >                                    
                            </div>
                            <div class="col-md-6">
                            <br>
                                <label for="exampleInputPassword1">Unit Posted From<b style="color:red;">*</b></label>
                                 <input type="text" class="form-control" name="unit" value ="{{$editrank->posted_unit}}" placeholder="" required>                                    
                            </div>
                            <div class="col-md-6">
                            <br>
                                <label for="exampleInputPassword1">Potential Instructor</b></label>
                                 <select class="mb-3 form-control" name="instr">
                                 <option value ="{{$editrank->instr}}">{{$editrank->instr}}</option>
                                    <option>No</option>
                                    <option>Yes</option>
                                 </select>                           
                            </div>
                            
                            
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Exercises</label>
                                 <textarea type="text" name="exercise" value= "{{$editrank->exercise}}" class="form-control" placeholder="" > </textarea>                                    
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
                                            <textarea type="text" name="phone" class="form-control" placeholder="Enter phone number(s) of officer" onkeypress="return isNumberKey(event)" required>{{$editrank->phone}}</textarea>
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
                                 <input type="text" name="kin" value="{{$editrank->kin}}" class="form-control" placeholder="Enter next of kin" >                                    
                            </div>
                       
                        
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Relation</label>
                                <input type="text" name="relation" value="{{$editrank->relation}}" class="form-control" placeholder="Enter kin relation">                  
                            </div>
                           
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Phone Number(Emergency contact)</label>
                                 <input type="text" name="kphone" value="{{$editrank->kphone}}" class="form-control" placeholder="Enter kin phone" onkeypress="return isNumberKey(event)" >                                    
                            </div>
                        </div>
                        <hr>
                        <h5 class="mt-5">Passout and Promotion</h5>
                        <hr>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Passout Date<b style="color:red;">*</b></label>
                                    <input type="date" name="passout" class="form-control" value="{{$editrank->passout}}" placeholder="Select commission date" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Promotion Date<b style="color:red;">*</b></label>
                                    <input type="date" name="promotion" value="{{$editrank->promotion}}" class="form-control" placeholder="Select last promotion date" >
                                </div>
                            </div>
                        <div class="row">
                        <div class="col-md-6">
                            <br>
                                <label for="exampleInputPassword1">Postings Status</b></label>
                                 <select class="mb-3 form-control" name="status">
                                 <option value ="{{$editrank->status}}">Select Status</option>
                                    <option value=1>Posted Out</option>
                                    <option value = 0>Returned</option>
                                 </select>                           
                            </div>
                            <div class="col-md-6">
                                <h5 class="mt-5">Recommendation</h5>
                                <hr>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Recommendation</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" name="recommend" class="form-control" " placeholder="Enter additional info">{{$editrank->recommendation}}</textarea>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mt-5">Remarks/Comments</h5>
                                <hr>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Remarks</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" name="remarks" class="form-control" placeholder="Enter additional info">{{$editrank->remarks}}</textarea>
                                        </div>
                                    </div>
                            </div>
                        </div>
      
                                <div class="input-group cust-file-button">
                                    <div class="custom-file">
                                    <a href="{{url('/ranks-portal')}}">Cancel</a>
                                    </div>
                                    
                                    <div class="input-group-append">
                                        <button class="btn  btn-primary" type="submit" value="submit">Update</button>
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