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
                            <li class="breadcrumb-item"><a href="#!">Civilians</a></li>
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
                        <h5>Civilians Board</h5>
                        <a href="{{url('/printallcivilian')}}"><button class="btn btn-primary" style="border-radius:200px;width:150px;background-color:#c2a024"><b>Print All</b></button></a> 

                         <a href="{{url('/addcivilians')}}" style="float:right;"><b>Add new +</b></a>
                    </div>
                    <div class="card-body task-data">
                        <div class="table-responsive form-material">
                            <table id="simpletable" class="table dt-responsive task-list-table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                       <th>ID</th>
                                        <th>Svc Number</th>
                                        <th>Rank</th>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="task-page">  
									@foreach($civilians as $index => $civilians)                                  
                                    <tr>
                                        <td>{{$index+1}}</td>
                                        <td>{{$civilians->service}}</td>
                                        <td>{{$civilians->rank}}</td>
                                        <td>{{$civilians->lname}}</td>
                                        <td>{{$civilians->fname}}</td>
                                        <td>
                                        <a href="{{url('/edit-civilian/'.$civilians->id)}}" style="color:black;"><i class="fas fa-edit"></i></a>
                                            <a href="{{url('/view-civilian/'.$civilians->id.'/'.$civilians->service)}}" style="color:blue;"><i class="fas fa-eye"></i></a>
                                            <a href="#" onclick="confirmDelete('{{url('/delete-civilian/'.$civilians->id)}}')" style="color:red;"><i class="fas fa-trash"></i></a>
                                            {{-- <a href="{{url('/print-civilian/'.$civilians->id.'/'.$civilians->service)}}" style="color:;"><i class="fas fa-print"></i></a> --}}
                                        </td>
                                    </tr>
									@endforeach

                                    <script>
                                        function confirmDelete(url) {
                                            if (confirm("Are you sure you want to delete this civilian?")) {
                                                window.location.href = url;
                                            }
                                        }
                                    </script>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
        <!-- [ Main Content ] end -->
   @endsection