@extends('admin.layout.header')
@section('headers')
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">User Registration</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('/users')}}">Users</a></li>
                            <li class="breadcrumb-item"><a href="#!">Add User</a></li>
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
                        <h5>Users</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                 <form method="POST" action="{{url('/add-user')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Svc No<b style="color:red;">*</b></label>
                                        <input type="text" required name="svc_no" class="form-control" placeholder="Enter Service Number" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Username<b style="color:red;">*</b></label>
                                        <input type="text" required name="name" class="form-control" placeholder="Enter Username" required>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Email<b style="color:red;">*</b></label>
                                        <input type="email" required name="email" class="form-control" placeholder="Enter Email" required>
                                    </div>  

                                                
                                    <div class="form-group">
                                        <label>Select Role<b style="color:red;">*</b></label>
                                        <select class="form-control" name="roles"  required>
                                        <option selected value="">--Select Role--</option>
                                            @foreach($roles as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>                                
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Password <b style="color:red;">*</b></label>
                                        <input type="password" required name="password" class="form-control" placeholder="Enter Password" required>
                                    </div> 

                                    
                                    <div class="form-group">
                                    <button class="btn  btn-primary" type="submit" value="submit">Submit</button>
                                    </div>                                 
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Confirm Password <b style="color:red;">*</b></label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Enter Password" required>
                                    </div>                                
                            </div>
                            <div class="col-md-3">                              
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