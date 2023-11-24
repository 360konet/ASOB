@extends('admin.layout.header')
@section('headers')
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Role Assigning</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('/users')}}">Users</a></li>
                            <li class="breadcrumb-item"><a href="#!">Role Assigning</a></li>
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
                        <h5>User</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                 <form method="POST" action="{{url('/change-user-role-'.$user->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Username<b style="color:red;">*</b></label>
                                        <input type="text" value="{{$user->name}}" readonly class="form-control" placeholder="Enter Username" required>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Email<b style="color:red;">*</b></label>
                                        <input type="email" value="{{$user->email}}" readonly class="form-control" placeholder="Enter Email" required>
                                    </div>                                 
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Select Role<b style="color:red;">*</b></label>
                                    <select class="form-control" name="roles">
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}"
                                            @if(in_array($role->id, $userRoles)) selected @endif>{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div>                                 
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                    <button class="btn  btn-primary" type="submit" value="submit">Update</button>
                                    </div>                                
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