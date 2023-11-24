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
                            <li class="breadcrumb-item"><a href="#">Course Report</a></li>
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
                        <h5>Course Record</h5>
                    </div>
                    <div class="card-body">
                        <h5>Filter</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <form method="GET" action="{{url('/findcourse')}}" enctype="multipart/form-data">
                                    @csrf
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
                                        <label for="exampleInputPassword1">Name</label>
                                        <select id="select-field-2" class="mb-3 form-control" name="name"></select>                                  
                                  </div>                                   
                            </div>

                            <script>
                                var selectField1 = document.getElementById("select-field-1");
                                var selectField2 = document.getElementById("select-field-2");
                                var rankInput = document.querySelector('input[name="rank"]');
                                var lastNameInput = document.querySelector('input[name="lname"]');
                                var firstNameInput = document.querySelector('input[name="fname"]');
                                var genderInput = document.querySelector('input[name="gender"]');

                                selectField1.addEventListener("change", function() {
                                    selectField2.innerHTML = "";

                                    if (selectField1.value === "Officers") {
                                        fetch('/get-officer-data')
                                            .then(response => response.json())
                                            .then(data => {
                                                var option = document.createElement("option");
                                                option.text = "--Select Name--";
                                                option.value = ""; 
                                                selectField2.add(option);
                                                data.forEach(officer => {
                                                    var option = document.createElement("option");
                                                    option.text = officer.rank + '  '+officer.fname;
                                                    option.value = officer.id; 
                                                    selectField2.add(option);
                                                });
                                            });
                                    } else if(selectField1.value === "Ranks") {
                                        fetch('/get-rank-data')
                                            .then(response => response.json())
                                            .then(data => {
                                                var option = document.createElement("option");
                                                option.text = "--Select Service Number--";
                                                option.value = ""; 
                                                selectField2.add(option);
                                                data.forEach(rank => {
                                                    var option = document.createElement("option");
                                                    option.text = rank.rank+ '  '+rank.fname;
                                                    option.value = rank.id; 
                                                    selectField2.add(option);
                                                });
                                            });
                                    } else if (selectField1.value === "Civilians") {
                                        fetch('/get-civilian-data')
                                            .then(response => response.json())
                                            .then(data => {
                                                var option = document.createElement("option");
                                                option.text = "--Select Service Number--";
                                                option.value = ""; 
                                                selectField2.add(option);
                                                data.forEach(civilian => {
                                                    var option = document.createElement("option");
                                                    option.text = civilian.rank+ '  '+civilian.fname;
                                                    option.value = civilian.id; 
                                                    selectField2.add(option);
                                                });
                                            });
                                    }
                                });
                            </script>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Course Name</label>
                                        <select class="form-control select2" name="csename" id="cse">
                                        <option value="">--Select Course Name --</option>
                                        @foreach($courses as $course)
                                           <option value="{{$course->csename}}">{{$course->csename}}</option>
                                        @endforeach
                                    </select>                                  
                                  </div>                                   
                            </div>
                            <!--<div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Status</label>
                                        <select class="form-control select2" name="status">
                                        <option value="">- <i>Select Status</i> --</option>
                                        <option>- <i>Completed</i> --</option>
                                        <option>- <i>Not completed</i> --</option>
                                    </select>                                  
                                  </div>                                   
                            </div>-->
                            <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Recommendation</label>
                                        <select class="mb-3 form-control" name="recommend">
                                        <option value="">- <i>Select Recommendation</i> --</option>
                                        <option Value="Yes">- <i>Yes</i> --</option>
                                    </select>                                  
                                  </div>                                   
                            </div>
                            <div class="col-md-1">
                                    <div class="form-group">
                                         <button class="btn  btn-primary" type="submit" value="submit">Filter</button>
                                  </div>                                   
                            </div>

                            <!-- <div class="col-md-1">
                                    <div class="form-group">
                                    <a href="{{url('/printcsereport')}}" class="btn btn-primary">Print</a>                                  </div>                                   
                            </div> -->
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