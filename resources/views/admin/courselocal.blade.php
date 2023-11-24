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
                            <li class="breadcrumb-item"><a href="#!">Courses</a></li>
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
                        <h5>Courses</h5> 
                        <a href="{{url('/printallcl')}}"><button class="btn btn-primary" style="border-radius:200px;width:150px;background-color:#c2a024"><b>Print All</b></button></a> 

                        <a href="{{url('/add-local-course')}}" style="float:right;"><b>Add new +</b></a>
                    </div>
                    <div class="card-body task-data">
                        <div class="table-responsive form-material">
                            <table id="simpletable" class="table dt-responsive task-list-table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Id #</th>
                                        <th>Rank</th>
                                         <th>Personnel Name</th>
                                        <th>Course Name</th>
                                        <th>Location</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="task-page"> 
                                    @foreach($coursel as $index => $cl) 
                                    <tr>
                                        <td><b>{{$index + 1}}</b></th>
                                        <td><b>{{$rank = \Illuminate\Support\Facades\DB::table($cl->category)->where('id',$cl->personnel_id)->value('rank')}}</b></td>
                                        <td><b>{{$name = \Illuminate\Support\Facades\DB::table($cl->category)->where('id',$cl->personnel_id)->value('fname')}}</b></td>
											<td>{{$cl->csename}}</td>
											<td>{{$cl->location}}</td>
                                            <td>{{$cl->start_date}}</td>
                                            <td>{{$cl->end_date}}</td>
                                            <td>
                                        <a href="{{url('/edit-course-local/'.$cl->id)}}" style="color:black;"><i class="fas fa-edit"></i></a>
                                            <a href="{{url('/view-course-local/'.$cl->id)}}" style="color:blue;"><i class="fas fa-eye"></i></a>
                                            <a href="#" onclick="confirmDelete('{{url('/delete-course-local/'.$cl->id)}}')" style="color:red;"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                    <script>
                                        function confirmDelete(url) {
                                            if (confirm("Are you sure you want to delete this local course?")) {
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