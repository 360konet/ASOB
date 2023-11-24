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
                            <li class="breadcrumb-item"><a href="#">Reports<i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Operations Report</a></li>
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
                        <h5>Operation Report</h5>
                    </div>
                    <div class="card-body">
                        <h5>Filter</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <form method="GET" action="{{url('/snrroll')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label>Category</label>
                                            <select id="select-field-1" class="mb-3 form-control select2 " name="category" >
                                                <option value="">--Select type--</option>
                                                <option value="Officers">Officers</option>
                                                <option value="Ranks">Soldiers</option>
                                                <option value="Civilians">Civilians</option>
                                            </select>
                                        </div>
                                    </div>

                            
                            
                                    <div class="col-md-3">
                                            <div class="form-group">
                                                <button class="btn  btn-primary" type="submit" value="submit">Seniority Roll</button>
                                            </div>                                   
                                    </div>

                            
                        
                                </form>
                            </div>
                          
                            
   
                        </div>
                    </div>
                </div>
            </div>       
        </div>

                    <div class="row">
                        <!-- [ task-list ] start -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Ghanbatt Seniority Roll</h5> <button onclick="printTable()" class="btn btn-primary" style="border-radius:200px;width:150px;background-color:#c2a024">Print PDF</button>
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
                                                    <th>Duration</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody class="task-page"> 
                                            @if(!isset($roll)){ 
                                                 
                                                <tr>
                                                <td><b></b></th>
                                                    <td><b></b></td>
                                                    <td><b></b></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    
                                                
                                                    
                                                </tr>                                 
                                                
                                           
                                            }@else{
                                                 @foreach($roll as $index => $operation)                               
                                                <tr>
                                                <td><b>{{$index + 1}}</b></th>
                                                    <td><b>{{$operation->rank}}</b></td>
                                                    <td><b>{{$operation->fname}}</b></td>
                                                    <td>{{$operation->lops}}</td>
                                                    <td>{{$operation->lops_loc}}</td>
                                                    <td>{{$operation->lops_appt}}</td>
                                                    <td>{{$operation->lops_departure}} - {{$operation->lops_return}}</td>
                                                
                                                
                                                </tr>
                                             @endforeach
                                            }@endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>
                



                 
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->


@endsection