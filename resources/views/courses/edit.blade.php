@extends('admin.layout.header')

	<!-- [ Header ] end -->
	@section('headers')
	

<!-- [ Main Content ] start -->

        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="*"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">New Course</a></li>
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
                        <h5>New Course - Edit</h5>
                    </div>
                    <div class="card-body">
                       
                        <div class="row">
                            <div class="col-md-6">
                                <form method="POST" action="{{route('courses.update',[$course->id])}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')        

                                    
                     <div class="form-group">
                        
                        <div class="row">
                        <div class="col-md-6">
                               
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Course Name<b style="color:red;">*</b></label>
                                        <input id="select-field-2" class="mb-3 form-control" value="{{$course->csename}}" name="csename" required/>                                  
                                      </div>                                  
                            </div>                                 
                            </div>
                            
                        </div>
                                <div class="input-group cust-file-button">
                                    <div class="custom-file">
                                        <a href="{{route('courses.index')}}">Cancel</a>
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
@endsection
