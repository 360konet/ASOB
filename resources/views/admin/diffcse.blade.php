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
                            <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('/recour')}}">Courses</a></li>
                            <li class="breadcrumb-item"><a href="#!">Filter</a></li>
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
                        <h5>Course</h5>
                        <a href="{{url('/printcourserecord')}}"><button class="button" style="border-radius:200px;width:150px;background-color:#0096FF"><b>Print</b></button></a> 
                    </div>
                    <div class="card-body task-data">
                        <div class="table-responsive form-material">
                            <table id="simpletable" class="table dt-responsive task-list-table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Service Number</th>
                                        <th>Rank</th>
                                        <th>Name</th>
                                        <th>Gender</th>
										<th>Recommendation</th>
                                    </tr>
                                </thead>
                                <tbody class="task-page">
                                @foreach($main as $index=> $course)
                                  <tr>
                                    <td style="font-size: 13px">{{$index +1}}</td>
                                    <td style="font-size: 13px">{{$course->service}}</td>
                                    <td style="font-size: 13px">{{$course->rank}}</td>
                                    <td style="font-size: 13px">{{$course->fname}} {{$course->lname}}</td>
                                    <td style="font-size: 13px">{{$course->gender}}</td>
                                    <td style="font-size: 13px">{{$course->recommendation}}</td>
                                  </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
        <!-- [ Main Content ] end -->
    @endsection