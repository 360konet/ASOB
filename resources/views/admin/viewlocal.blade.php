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
                            <li class="breadcrumb-item"><a href="{{url('/local')}}">Operations</a></li>
                            <li class="breadcrumb-item"><a href="#">Operation Report</a></li>
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
                        <h5>{{$local->rank}} {{$local->lname}} {{$local->fname}}'s Internal Operations Report Update</h5>
                    </div>
                    <div class="card-body">
                        <h5>Personnel</h5>
                        <hr>
                        <div class="row">


                            <div class="col-md-6">
                                <form method="POST" action="{{url('/updateinternal/'.$local->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Personnel Category<b style="color:red;">*</b></label>
                                     <select  readonly id="select-field-1" class="mb-3 form-control" required>
                                        <option value="{{$local->operation}}">{{$local->operation}}</option>
                                     </select>
                                     </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Service<b style="color:red;">*</b></label>
                                        <select id="select-field-2" readonly class="mb-3 form-control"  required>
                                            <option value="{{$local->service}}">{{$local->service}}</option>
                                        </select>                                  
                                      </div>                                  
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Rank<b style="color:red;">*</b></label>
                                        <input id="rankField"  value="{{$local->rank}}" readonly class="mb-3 form-control"  required>                                  
                                      </div>                                  
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name<b style="color:red;">*</b></label>
                                        <input id="lastNameField" value="{{$local->lname}}" readonly class="mb-3 form-control"  required>                             
                                      </div>                                  
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name<b style="color:red;">*</b></label>
                                        <input id="firstNameInput" value="{{$local->fname}}" readonly class="mb-3 form-control" required>                                  
                                      </div>                                  
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Gender<b style="color:red;">*</b></label>
                                        <input id="gender" value="{{$local->gender}}" readonly class="mb-3 form-control"  required>                             
                                      </div>                                  
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

    if (selectField1.value === "Officer") {
        fetch('/get-officer-data')
            .then(response => response.json())
            .then(data => {
                data.forEach(officer => {
                    var option = document.createElement("option");
                    option.text = officer.service;
                    selectField2.add(option);
                });
            });
    } else if(selectField1.value === "Soldier") {
        fetch('/get-rank-data')
            .then(response => response.json())
            .then(data => {
                data.forEach(rank => {
                    var option = document.createElement("option");
                    option.text = rank.service;
                    selectField2.add(option);
                });
            });
    } else if (selectField1.value === "Civilian") {
        fetch('/get-civilian-data')
            .then(response => response.json())
            .then(data => {
                data.forEach(civilian => {
                    var option = document.createElement("option");
                    option.text = civilian.service;
                    selectField2.add(option);
                });
            });
    }
});

selectField2.addEventListener("change", function() {
    // Fetch the selected service data and populate the inputs
    if (selectField1.value === "Officer") {
        fetch('/get-officer-data')
            .then(response => response.json())
            .then(data => {
                var selectedOfficer = data.find(officer => officer.service === selectField2.value);
                if (selectedOfficer) {
                    rankInput.value = selectedOfficer.rank;
                    lastNameInput.value = selectedOfficer.lname;
                    firstNameInput.value = selectedOfficer.fname;
                    genderInput.value = selectedOfficer.arm;
                }
            });
    } else if (selectField1.value === "Soldier") {
        fetch('/get-rank-data')
            .then(response => response.json())
            .then(data => {
                var selectedSoldier = data.find(rank => rank.service === selectField2.value);
                if (selectedSoldier) {
                    rankInput.value = selectedSoldier.rank;
                    lastNameInput.value = selectedSoldier.lname;
                    firstNameInput.value = selectedSoldier.fname;
                    genderInput.value = selectedSoldier.arm;
                }
            });
    } else if (selectField1.value === "Civilian") {
        fetch('/get-civilian-data')
            .then(response => response.json())
            .then(data => {
                var selectedCivilian = data.find(rank => rank.service === selectField2.value);
                if (selectedCivilian) {
                    rankInput.value = selectedCivilian.rank;
                    lastNameInput.value = selectedCivilian.lname;
                    firstNameInput.value = selectedCivilian.fname;
                    genderInput.value = selectedCivilian.Gender;
                }
            });
    }
});
</script>

<script>
    $(document).ready(function() {
        $('#select-field-2').select2();
    });
</script>

                        <h5 class="mt-5">Operation Info</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Location<b style="color:red;">*</b></label>
                                 <input type="text" readonly value="{{$local->location}}" class="form-control" placeholder="Enter location" required>                                    
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Departure Date<b style="color:red;">*</b></label>
                                 <input type="date" value="{{$local->departure_date}}" readonly  class="form-control" placeholder="Enter hometown" required>                                    
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Expected Arrival Date<b style="color:red;">*</b></label>
                                 <input type="date" value="{{$local->arrival_date}}" readonly  class="form-control" placeholder="Select date" required>                                    
                            </div>
                        </div>
                        <h5 class="mt-5">Extra Info</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Appointment<b style="color:red;">*</b></label>
                                 <input type="text" class="form-control" value="{{$local->appointment}}" readonly  placeholder="Enter appointment" required>                                    
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Remarks</label>
                                 <textarea type="text" class="form-control" value="{{$local->remarks}}" readonly  placeholder="Enter remarks/recommendation">{{$local->remarks}}</textarea>                                
                            </div>
                        </div>
                                <div class="input-group cust-file-button">
                                    <div class="input-group-append">
                                        
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