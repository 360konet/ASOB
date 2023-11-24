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
                            <li class="breadcrumb-item"><a href="#!">Edit Officer</a></li>
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
                                 <form method="POST" action="{{url('/officeredit/'.$editofficer->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                         <div class="form-group">
                                        <label for="exampleInputEmail1">Rank<b style="color:red;">*</b></label>
                                        <select class="mb-3 form-control" name="rank" id="rank"required>
                                        <option value ="{{$editofficer->rank}}">{{$editofficer->rank}}</option>
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
                                    @if($editofficer->image)
                                    <img src="{{asset('officers/'.$editofficer->image)}}" style="border-radius: 100px;" name="image" height="150px" width="150px">
                                    @endif
                                    <div class="form-group">
                                         <label for="exampleInputEmail1">Profile Picture{{--<b style="color:red;">*</b>--}}</label> 
                                        <input type="file" name="image"class="form-control" aria-describedby="emailHelp" placeholder="name.jpg">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Full Name<b style="color:red;">*</b></label>
                                        <input type="text" name="fname" value="{{$editofficer->fname}}"class="form-control" placeholder="Enter first name" required>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Service Number<b style="color:red;">*</b></label>
                                        <input type="text" name="service" value="{{$editofficer->service}}" class="form-control" placeholder="Enter service number" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Gender<b style="color:red;">*</b></label>
                                    <select class="mb-3 form-control" name="gender" required>
                                    <option value ="{{$editofficer->gender}}">{{$editofficer->gender}}</option>
                                        <option>--Select Gender--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <label for="exampleInputPassword1">Date Of Birth (DoB)</label>
                                        <input type="text" class="form-control"value="{{$editofficer->dob}} " name="dob" placeholder="Select date" >                                    
                                    </div>                                 
                            </div>

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" name="location" value="{{$editofficer->location}}" class="form-control" placeholder="Enter location">
                                    </div>                                
                            </div>
                        </div>
                        <h5 class="mt-5">Other Info</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Driving License</label>
                                  <select class="mb-3 form-control" name="license">
                                  <option value ="{{$editofficer->license}}">{{$editofficer->license}}</option>
                                    <option>No</option>
                                    <option>Yes</option>
                                 </select>                                          
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Type of Driver</label><br>

                                 <select class="mb-3 form-control" name="driver_type[]"  multiple>
                                  <option value= "N/A" {{ $editofficer->driver_type == 'N/A' ? 'selected' : '' }}>N/A</option>
                                    <option value= "Basic Driver" {{ $editofficer->driver_type == 'Basic Driver' ? 'selected' : '' }}>Basic Driver</option>
                                    <option value= "Motorcycle Rider" {{ $editofficer->driver_type == 'Motorcycle Rider' ? 'selected' : '' }}>Motorcycle Rider</option>
                                    <option value= "4X4 Driver(Manual)" {{ $editofficer->driver_type == '4X4 Driver(Manual)' ? 'selected' : '' }}>4X4 Driver(Manual)</option>
                                    <option value= "TCV Driver" {{ $editofficer->driver_type == 'TCV Driver' ? 'selected' : '' }}>TCV Driver</option>
                                 </select>   

                            </div>
                            <div class="col-md-6">
                            <br>
                                <label for="exampleInputPassword1">Date of Postings</label>
                                 <input type="date" class="form-control" name="dop" value ="{{$editofficer->dop}}" placeholder="Select date" >                                    
                            </div>
                            <div class="col-md-6">
                            <br>
                                <label for="exampleInputPassword1">Unit Posted From<b style="color:red;">*</b></label>
                                 <input type="text" class="form-control" name="unit" value ="{{$editofficer->posted_unit}}" placeholder="" required>                                    
                            </div>
                            <div class="col-md-6">
                            <br>
                                <label for="exampleInputPassword1">Potential Instructor</b></label>
                                 <select class="mb-3 form-control" name="instr">
                                 <option value ="{{$editofficer->instr}}">{{$editofficer->instr}}</option>
                                    <option>No</option>
                                    <option>Yes</option>
                                 </select>                           
                            </div>
                            
                            
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Exercises</label>
                                 <textarea type="exercises" name="exercise" value="{{$editofficer->exercise}}" class="form-control" placeholder="Enter exercises" >{{$editofficer->exercise}}</textarea>                                    
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
                                            <textarea type="text" name="phone" class="form-control" placeholder="Enter phone number(s) of officer" onkeypress="return isNumberKey(event)" required>{{$editofficer->phone}}</textarea>
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
                                 <input type="text" name="kin" value="{{$editofficer->kin}}" class="form-control" placeholder="Enter next of kin" >                                    
                            </div>
                       
                        
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Relation</label>
                                <input type="text" name="relation" value="{{$editofficer->relation}}" class="form-control" placeholder="Enter kin relation">                  
                            </div>
                           
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Phone Number(Emergency contact)</label>
                                 <input type="text" name="kphone" value="{{$editofficer->kphone}}" class="form-control" placeholder="Enter kin phone" onkeypress="return isNumberKey(event)" >                                    
                            </div>
                        </div>
                        <hr>
                        <h5 class="mt-5">Commisioning and Promotion</h5>
                        <hr>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Commission Date</label>
                                    <input type="date" name="commission" value="{{$editofficer->commission}}" class="form-control" placeholder="Select commission date">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Promotion Date</label>
                                    <input type="date" name="promotion" value="{{$editofficer->promotion}}" class="form-control" placeholder="Select last promotion date">
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-6">
                            <br>
                                <label for="exampleInputPassword1">Postings Status</b></label>
                                 <select class="mb-3 form-control" name="status">
                                 <option value ="{{$editofficer->status}}">Select Status</option>
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
                                            <textarea type="text" name="recommend" class="form-control" " placeholder="Enter additional info">{{$editofficer->recommendation}}</textarea>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mt-5">Remarks/Comments</h5>
                                <hr>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Remarks</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" name="remarks" class="form-control" placeholder="Enter additional info">{{$editofficer->remarks}}</textarea>
                                        </div>
                                    </div>
                            </div>
                        </div>
      
                                <div class="input-group cust-file-button">
                                    <div class="custom-file">
                                    <a href="{{url('/officers-portal')}}">Cancel</a>
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