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
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="icon feather icon-users f-30 text-c-yellow"></i>
                            </div>
                            <div class="col-3">
                                <p class="text-muted m-b-5">M</p>
                                <h6> {{$moverall}}</h6>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <p class="text-muted m-b-5">F</p>
                                <h6>{{$foverall}} </h6>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Overall</h6>
                                <h2 class="m-b-0">{{$overall}} </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="icon feather icon-users f-30 text-c-green"></i>
                            </div>
                            <div class="col-3">
                                <p class="text-muted m-b-5">M</p>
                                <h6>{{$mofficer}} </h6>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <p class="text-muted m-b-5">F</p>
                                <h6> {{$fofficer}}</h6>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Officers</h6>
                                <h2 class="m-b-0"> {{$allofficer}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="icon feather icon-users f-30 text-c-red"></i>
                            </div>
                            <div class="col-3">
                                <p class="text-muted m-b-5">M</p>
                                <h6> {{$msldrs}}</h6>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <p class="text-muted m-b-5">F</p>
                                <h6> {{$fsldrs}}</h6>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Soldiers</h6>
                                <h2 class="m-b-0"> {{$allsldrs}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="icon feather icon-users f-30 text-c-blue"></i>
                            </div>
                            <div class="col">
                                <p class="text-muted m-b-5">M</p>
                                <h6> {{$mciv}}</h6>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <p class="text-muted m-b-5">F</p>
                                <h6>{{$fciv}} </h6>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Civilians</h6>
                                <h2 class="m-b-0">{{$allciv}} </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
           
           
            
        <div class="row">
           
            <!-- customar project  end -->
            <!-- seo ecommerce start -->                    
            <div class="col-xl-4 col-md-6">
                <div class="card overflow-hidden">
                    <div class="card-body  pb-0">
                        <div class="row text-white">
                            <div class="col-auto">
                                <h4 class="m-b-5 text-black">UN Ops</h4>
                            </div>
                            <div class="col text-right">
                                <h6 class="text-white"><a href="{{url('/un')}}" style="color:black">More...</a></h6>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-muted">Total <b style="color:black;">  ({{$untotal}})</b>.</p>
                        <div class="row">
                            <div class="col">
                                <p class="text-muted m-b-5">Officers</p>
                                <h6>{{$unOfficer}}</h6>
                            </div>
                            <div class="col-span">
                                <p class="text-muted m-b-5">Soldiers</p>
                                <h6>{{$unSoldier}}</h6>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <p class="text-muted m-b-5">Civilians</p>
                                <h6>{{$unCivilian}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-4 col-md-6">
                <div class="card overflow-hidden">
                    <div class="card-body  pb-0">
                        <div class="row text-white">
                            <div class="col-auto">
                                <h4 class="m-b-5 text-black">Internal Ops</h4>
                            </div>
                            <div class="col text-right">
                                <h6 class="text-white"><a href="{{url('/local')}}" style="color:black">More...</a></h6>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-muted" >Total <b style="color:black;">({{$intotal}})</b>.</p>
                        <div class="row">
                            <div class="col">
                                <p class="text-muted m-b-5">Officers</p>
                                <h6>{{$inOfficer}}</h6>
                            </div>
                            <div class="col-span">
                                <p class="text-muted m-b-5">Soldiers</p>
                                <h6>{{$inSoldier}}</h6>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <p class="text-muted m-b-5">Civilians</p>
                                <h6>{{$inCivilian}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-4 col-md-6">
                <div class="card overflow-hidden">
                    <div class="card-body bg-#373a3c pb-0">
                        <div class="row text-white">
                            <div class="col-auto">
                                <h4 class="m-b-5 text-gray">Postings</h4>
                            </div>
                            <div class="col text-right">
                                <h6 class="text-black"><a href="" style="color:black">More..</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-muted">Total <b style="color:black;"> ({{$ad}})</b>.</p>
                        <div class="row">
                            <div class="col">
                                <p class="text-muted m-b-5">Attachments</p>
                                <h6>{{$attach}}</h6>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col-span">
                                <p class="text-muted m-b-5">Postings</p>
                                <h6>{{$deploy}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="card overflow-hidden">
                    <div class="card-footer">
                        <p class="text-muted"><h6>Personnel undertaking courses <b style="color:black">({{$allcourse}})</h6></b></p>
                        <div class="row">
                            <div class="col">
                                <p class="text-muted m-b-5">Local <b style="color:black">({{$local}})</b></p>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <p class="text-muted m-b-5">Oversea <b style="color:black">({{$over}})</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- prject ,team member start -->
            <div class="col-xl-4 col-md-6">
                <div class="card overflow-hidden">
                    <div class="card-footer">
                        <p class="text-muted"><h6>Leave <b style="color:black,">(0)</b></h6></p>
                        <div class="row">
                            <div class="col">
                                <p class="text-muted m-b-5">Officers <b style="color:black">(0)</b></p>
                            </div>
                           
                            <div class="col">
                                <p class="text-muted m-b-5">Soldiers <b style="color:black">(0)</b></p>
                            </div>
                            <div class="col">
                                <p class="text-muted m-b-5">Civilians <b style="color:black">(0)</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        

    </div>
    <!-- [ Main Content ] end -->
@endsection
