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
                            <h5 class="m-b-10">Course Sorting</h5>
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
                                        <th>Id #</th>
                                        <th>Rank</th>
                                         <th>Personnel Name</th>
                                        <th>Operation</th>
                                        <th>Location</th>
                                        <th>Appointment</th>
                                        <th>Departure</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="task-page">  
									@foreach($roll as $index => $operation)                                  
                                    <tr>
                                       <td><b>{{$index + 1}}</b></th>
                                        <td><b>{{$rank = \Illuminate\Support\Facades\DB::table($operation->category)->where('id',$operation->personnel_id)->value('rank')}}</b></td>
                                        <td><b>{{$name = \Illuminate\Support\Facades\DB::table($operation->category)->where('id',$operation->personnel_id)->value('fname')}}</b></td>
                                        <td>{{$operation->operation}}</td>
                                        <td>{{$operation->location}}</td>
                                         <td>{{$operation->appointment}}</td>
                                        <td>{{$operation->departure_date}}</td>
                                       
                                        <td>
                                        <a href="{{url('/edit-operation/'.$operation->id)}}" style="color:black;"><i class="fa fa-edit"></i>
                                           <a href="{{url('/view-operation/'.$operation->id)}}" style="color:blue;"><i class="fa fa-eye"></i></a>
                                            
                                        <a href="#" onclick="confirmDelete('{{url('/delete-operation/'.$operation->id)}}')" style="color:red;"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="input-group cust-file-button">
                                    <div class="custom-file">
                                    <a href="{{url('/reope')}}">Cancel</a>
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

