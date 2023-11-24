@extends('admin.layout.header')
@section('headers')

<style>
@media print {
  body {
    margin: 0;
    padding: 0;
    visibility: hidden;
  }
  
  #simpletable {
    visibility: visible;
    width: 100%;
    height: 100%;
    border-collapse: collapse;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border: 1px solid #ccc;
    padding: 8px;
    border-spacing: 0; /* Adjust the spacing as needed */
  }

  #simpletable th, #simpletable td {
    border: 1px solid #ccc;
    padding: 8px;
  }
}
</style>

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
                            <li class="breadcrumb-item"><a href="#!">Sorted Course</a></li>
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
                        <h5>Course</h5> <button onclick="printTable()" class="btn btn-primary" style="border-radius:200px;width:150px;background-color:#c2a024">Print PDF</button>
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
										<th>Course Name</th>
                                        <th>Period</th>
                                        <th>Location</th>
                                    </tr>
                                </thead>
                                <tbody class="task-page">
                                @foreach($main as $index=> $course)
                                  <tr>
                                  
                                    <td style="font-size: 13px">{{$index +1}}</td>
                                    <td style="font-size: 13px">{{$service = \Illuminate\Support\Facades\DB::table($course->category)->where('id',$course->personnel_id)->value('service')}}</td>
                                    <td style="font-size: 13px">{{\Illuminate\Support\Facades\DB::table($course->category)->where('id',$course->personnel_id)->value('rank')}}</td>
                                    <td style="font-size: 13px">{{\Illuminate\Support\Facades\DB::table($course->category)->where('id',$course->personnel_id)->value('fname')}}</td>
                                    <td style="font-size: 13px">{{\Illuminate\Support\Facades\DB::table($course->category)->where('id',$course->personnel_id)->value('gender')}}</td>
                                    <td style="font-size: 13px">{{$course->csename}}</td>
                                    <td style="font-size: 13px">{{$course->start_date}} - {{$course->end_date}}</td>
                                    <td style="font-size: 13px">{{$course->to}}</td>
                                  </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="input-group cust-file-button">
                                    <div class="custom-file">
                                    <a href="{{url('/recour')}}">Cancel</a>
                                    </div>
                                   
                                </div>
                    </div>
                </div>
                
        <!-- [ Main Content ] end -->
   @endsection

   <script>
function printTable() {
  window.print();
}
</script>

