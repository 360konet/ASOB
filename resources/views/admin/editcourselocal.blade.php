	
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
                            <li class="breadcrumb-item"><a href="{url('/home'){}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('/courselocal')}}">Courses</a></li>
                            <li class="breadcrumb-item"><a href="#!">Edit Course</a></li>
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
                        <h5>{{$rank = \Illuminate\Support\Facades\DB::table($editcl->category)->where('id',$editcl->personnel_id)->value('rank')}} {{$name = \Illuminate\Support\Facades\DB::table($editcl->category)->where('id',$editcl->personnel_id)->value('fname')}}'s Course Update</h5>
                    </div>
                    <div class="card-body">
                        <h5>Category</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <form method="POST" action="{{url('/update-course-local/'.$editcl->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Personnel Category<b style="color:red;">*</b></label>
                                    <select name="category" readonly id="select-field-1" class="mb-3 form-control">
                                        <option value="{{$editcl->category}}">{{$editcl->category}}</option>
                                    </select>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name<b style="color:red;">*</b></label>
                                        <select id="select-field-2" readonly class="mb-3 form-control" name="personnel_id" required>
                                        <option value="{{$editcl->personnel_id}}">{{$rank}} {{$name}}</option>
                                        </select>                                  
                                      </div>                                  
                            </div>
                            
                        </div>

                        <h5 class="mt-5">Location Details</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">From<b style="color:red;">*</b></label>
                                 <input type="text" name="from" value="{{$editcl->from}}" class="form-control" placeholder="Enter unit from">                                    
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">To<b style="color:red;">*</b></label>
                                 <input type="text" name="location" value="{{$editcl->location}}" class="form-control" placeholder="Enter location of course">                                    
                            </div>
                        </div>
                        <h5 class="mt-5">Date</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Start Date<b style="color:red;">*</b></label>
                                 <input type="date" class="form-control" value="{{$editcl->start_date}}" name="start_date" placeholder="Enter course start date">                                    
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">End Date<b style="color:red;">*</b></label>
                                 <input type="date" class="form-control" name="end_date" value="{{$editcl->end_date}}" placeholder="Enter course end date">                                    
                            </div>
                        </div>
                        <h5 class="mt-5">Details</h5>
                        <hr>
                        <div class="row">
                        <div class="col-md-6">
                                <label for="exampleInputPassword1">Type<b style="color:red;">*</b></label>
                                 <input type="text" name="type" value="{{$editcl->type}}" class="form-control" placeholder="Enter location of course">                                    
                            </div>
                        <div class="col-md-6">
                                <label for="exampleInputPassword1">Course Name<b style="color:red;">*</b></label>
                                 <input type="text" class="form-control" name="csename" value="{{$editcl->csename}}" placeholder="Enter appointment">                                    
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Remarks</label>
                                 <textarea type="text" class="form-control" name="remarks" value="{{$editcl->remarks}}" placeholder="Enter remarks"> </textarea>                               
                            </div>
                        </div>
                                <div class="input-group cust-file-button">
                                    <div class="custom-file">
                                        <a href="{{url('/personnel_courses')}}">Cancel</a>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn  btn-primary" type="submit" value="submit">Submit</button>
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