@extends('admin.layout.header')
@section('headers')
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">New Role</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('/roles')}}">Roles</a></li>
                            <li class="breadcrumb-item"><a href="#!">Add Role</a></li>
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
                        <h5>Role</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            <form method="POST" action="{{url('/change-role-'.$role->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Role Name<b style="color:red;">*</b></label>
                                <input type="text" name="role_name" value="{{$role->name}}" id="role_name" class="form-control" placeholder="Enter Role Name" required>
                            </div>

                        <div class="form-group">
                                <label>Permission<b style="color:red;">*</b></label>
                                @foreach($permissions as $permission)
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="{{$permission->name}}" name="permissions[]" value="{{$permission->name}}"
                                    @if($role->hasPermissionTo($permission))
                                    checked
                                    @endif>
                                    <label class="form-check-lable" for="{{$permission->name}}">{{$permission->name}}</label>
                                </div>
                                @endforeach

                                <button class="btn btn-primary" type="submit">Submit</button>
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
