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
                            <li class="breadcrumb-item"><a href="{{url('/leave')}}">Leave</a></li>
                            <li class="breadcrumb-item"><a href="#">Leave Details</a></li>
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
                        <h5>Leave - View Page</h5>
                    </div>
                    <div class="card-body">
                        <h5>Personnel</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                        
                            
                                    <div class="form-group">
                                        <label>First Name<b style="color:red;">*</b></label>
                                        <input id="firstNameInput" value="{{$rank = \Illuminate\Support\Facades\DB::table($leave->category)->where('id',$leave->personnel_id)->value('rank')}} {{$name = \Illuminate\Support\Facades\DB::table($leave->category)->where('id',$leave->personnel_id)->value('fname')}}" readonly class="mb-3 form-control" required>                                  
                                      </div>                                  
                            </div>
                        
                        </div>
                        

<h5 class="mt-5">Details</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Type<b style="color:red;">*</b></label>
                                <select readonly id="select-field-1" class="mb-3 form-control">
                                        <option value="{{$leave->type}}">{{$leave->type}}</option>
                                    </select>                           
                                 </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Reason<b style="color:red;">*</b></label>
                                 <textarea type="text" class="form-control" readonly placeholder="Enter reason">{{$leave->reason}}</textarea>                                  
                            </div>
                        </div>
                        <h5 class="mt-5">Date</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Start Date<b style="color:red;">*</b></label>
                                 <input type="date" class="form-control" readonly value="{{$leave->start_date}}" placeholder="Enter course start date">                                    
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">End Date<b style="color:red;">*</b></label>
                                 <input type="date" class="form-control" readonly value="{{$leave->end_date}}" placeholder="Enter course end date">                                    
                            </div>
                        </div>
                        <h5 class="mt-5">More Info</h5>
                        <hr>
                        <div class="row">
                        <div class="col-md-6">
                                <label for="exampleInputPassword1">Approved By<b style="color:red;">*</b></label>
                                 <input type="text" class="form-control" readonly value="{{$leave->approval}}" placeholder="Enter who approved the leave">                                    
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Remarks</label>
                                 <textarea type="text" class="form-control" readonly placeholder="Enter remarks">{{$leave->lname}}</textarea>                               
                            </div>
                        </div>
                                <div class="input-group cust-file-button">
                                    <div class="custom-file">
                                        <a href="{{url('/leave')}}">Cancel</a>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->
@endsection