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
                            <li class="breadcrumb-item"><a href="#!">Users</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ task-list ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>System Users</h5>
                        <a href="{{ url('/adduser') }}" style="float:right;"><b>Add new +</b></a>
                    </div>
                    <div class="card-body task-data">
                        <div class="table-responsive form-material">
                            <table id="simpletable" class="table dt-responsive task-list-table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Role</th>
										<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="task-page">
                                @foreach($users as $index => $user)                                 
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $user->name}}</td>
                                    <td>@foreach($user->roles as $role)
                                         {{$role->name}}
                                         @if(!$loop->last),@endif
                                         @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ url('/edit-user-role-'.$user->id) }}" style="color:black;"><i class="fas fa-edit"></i></a>
                                        <a href="{{ url('/delete-user-'.$user->id) }}" style="color:black;"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
        <!-- [ Main Content ] end -->
    @endsection