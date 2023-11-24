@extends('admin.layout.header')
@section('headers')
		<!-- [ Main Content ] start -->
		<!-- profile header start -->
        <div class="page-header">
          <a href="{{url('/civilians-portal')}}" style="color:#880808;"><b>Close Report</b></a>

            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Civilian's Report</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="user-profile user-card mb-4">
			<div class="card-header border-0 p-0 pb-0">
				<div class="cover-img-block">
					<!-- <img src="assets/images/profile/cover.jpg" alt="" class="img-fluid"> -->
					<div class="overlay"></div>
					<div class="change-cover">
						<div class="dropdown">
							<a class="drp-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
							<div class="dropdown-menu">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card-body py-0">
				<div class="user-about-block m-0">
					<div class="row">
						<div class="col-md-4 text-center mt-n5">
							<div class="change-profile text-center">
								<div class="dropdown w-auto d-inline-block">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<div class="profile-dp">
											<div class="position-relative d-inline-block">
												@if($viewcivilians->image)
												<img src="{{asset('civilians/'.$viewcivilians->image)}}" style="border-radius: 100px;" name="image" height="100px" width="100px">
												@endif											
                      </div>
											<div class="overlay">
												<span>Action</span>
											</div>
										</div>
										<div class="certificated-badge">
										</div>
									</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="{{url('/edit-civilian/'.$viewcivilians->id)}}">Edit</a>
										<a class="dropdown-item" href="{{url('/delete-civilian/'.$viewcivilians->id)}}">Delete</a>
										<a class="dropdown-item" href="{{url('/print-civilian/'.$viewcivilians->id.'/'.$viewcivilians->service)}}">Print Details</a>
									</div>
								</div>
							</div>
							<h5 class="mb-1">{{$viewcivilians->fname}} {{$viewcivilians->lname}}</h5>
							<p class="mb-2 text-muted">{{$viewcivilians->rank}}</p>
						</div>
						<div class="col-md-8 mt-md-4">
							<div class="row">
								<div class="col-md-6">
									<a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary">Date Of Employment : <b>{{$viewcivilians->employment}}</b></a>
									<div class="clearfix"></div>
									<a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary"></i>Defence Civilian</a>
								</div>
								<div class="col-md-6">
									<div class="media">
										<div class="media-body">
											<p class="mb-0 text-muted">Date Of Last Promotion : <b>{{$viewcivilians->promotion}}</b></p>
										</div> 
									</div>
								</div>
							</div>
							<ul class="nav nav-tabs profile-tabs nav-fill" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link text-reset active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Details</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-reset" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Operations</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-reset" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contacts/Emergencies</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-reset" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false">Courses</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- profile header end -->

		<!-- profile body start -->
		<div class="row">
			<div class="col-md-8 order-md-2">
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Personal details</h5>
							</div>
							<div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-1">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">First Name</label>
										<div class="col-sm-9">
											{{$viewcivilians->fname}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Last Name</label>
										<div class="col-sm-9">
											{{$viewcivilians->lname}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Gender</label>
										<div class="col-sm-9">
											{{$viewcivilians->Gender}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Birth Date</label>
										<div class="col-sm-9">
											{{$viewcivilians->dob}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Blood Group</label>
										<div class="col-sm-9">
											{{$viewcivilians->blood}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Home Town</label>
										<div class="col-sm-9">
											{{$viewcivilians->hometown}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Home Region</label>
										<div class="col-sm-9">
											{{$viewcivilians->region}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Nationality</label>
										<div class="col-sm-9">
											{{$viewcivilians->nationality}}
										</div>
									</div>
							</div>							
						</div>						
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Internal Operations</h5>
							</div>
							<div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-1">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Operations</label>
										<div class="col-sm-9">
                                        @if ($loperation)
                                            {{$loperation->service}},{{$loperation->appointment}}
                                            @endif
										</div>
									</div>
							</div>							
						</div>
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">UN Operations</h5>
							</div>
							<div class="card-body border-top pro-wrk-edit collapse show" id="pro-wrk-edit-1">
								<form>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Operations</label>
										<div class="col-sm-9">
											{{$viewcivilians->un}}<br>
                                            @if ($operation)
                                            {{$operation->service}},{{$operation->appointment}}
                                            @endif
										</div>
									</div>
								</form>
							</div>							
						</div>
					</div>
					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Spouse Details</h5>
							</div>
							<div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-1">
								<form>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Spouse Name</label>
										<div class="col-sm-9">
											{{$viewcivilians->spouse}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Spouse Contact</label>
										<div class="col-sm-9">
											{{$viewcivilians->sphone}}
										</div>
									</div>
								</form>
							</div>							
						</div>
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Next Of Kin</h5>
							</div>
							<div class="card-body border-top pro-dont-edit collapse show" id="pro-dont-edit-1">
								<form>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Next Of Kin(Emergency)</label>
										<div class="col-sm-9">
											{{$viewcivilians->kin}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Emergency Relation</label>
										<div class="col-sm-9">
											{{$viewcivilians->relation}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Emergency Contact</label>
										<div class="col-sm-9">
											{{$viewcivilians->kphone}}
										</div>
									</div>
								</form>
							</div>							
						</div>
						
					</div>
					<div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Course Local</h5>
							</div>
							<div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-1">
								<form>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Details</label>
										<div class="col-sm-9">
                                        {{$viewcivilians->course}}<br>
                                        @if ($lcourse)
                                            {{$lcourse->course}},{{$lcourse->to}}
                                            @endif
										</div>
									</div>
								</form>
							</div>							
						</div>
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Course Oversea</h5>
							</div>
							<div class="card-body border-top pro-dont-edit collapse show" id="pro-dont-edit-1">
								<form>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Details</label>
										<div class="col-sm-9">
                                        @if ($ocourse)
                                            {{$ocourse->course}},{{$ocourse->to}}
                                            @endif
										</div>
									</div>
								</form>
							</div>							
						</div>						
					</div>
				</div>
			</div>
			<div class="col-md-4 order-md-1">
				<div class="card new-cust-card">
					<div class="card-header">
						<h5>Remarks</h5>
						<div class="card-header-right">
							
						</div>
					</div>
					<div class="cust-scroll" style="height:415px;position:relative;">
						<div class="card-body p-b-0">
							<div class="align-middle m-b-0">
								<div class="d-inline-block">
										<h6>{{$viewcivilians->remarks}}</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- profile body end -->
	</div>
</div>
@endsection