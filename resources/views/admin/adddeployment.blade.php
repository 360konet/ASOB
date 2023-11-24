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
                            <li class="breadcrumb-item"><a href="{{url('/deployment')}}">Postings</a></li>
                            <li class="breadcrumb-item"><a href="#!">Add</a></li>
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
                        <h5>Postings - Add Page</h5>
                    </div>
                    <div class="card-body">
                        <h5>Category</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <form method="POST" action="{{url('/adddep')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Personnel Category<b style="color:red;">*</b></label>
                                    <select name="category" id="select-field-1" class="mb-3 form-control">
                                        <option>--Select category--</option>
                                        <option value="officers">Officer</option>
                                        <option value="ranks">Soldier</option>
                                        <!-- <option value="civilian">Civilian</option> -->
                                    </select>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Personnel Name<b style="color:red;">*</b></label>
                                        <select id="select-field-2" class="mb-3 js-example-tags form-control" name="personnel_id" required></select>                                  
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

    if (selectField1.value === "officers") {
        fetch('/get-officer-data')
            .then(response => response.json())
            .then(data => {
                var option = document.createElement("option");
option.text = "--Select Name Number--";
option.value = ""; 
selectField2.add(option);
                data.forEach(officer => {
                    var option = document.createElement("option");
                    option.text = officer.service+ '  ' +officer.rank + '  '+officer.fname;
                    option.value = officer.id;
                    selectField2.add(option);
                });
            });
    } else if(selectField1.value === "ranks") {
        fetch('/get-rank-data')
            .then(response => response.json())
            .then(data => {
                var option = document.createElement("option");
option.text = "--Select Name Number--";
option.value = ""; 
selectField2.add(option);
                data.forEach(rank => {
                    var option = document.createElement("option");
                    option.text = rank.service + '  ' +rank.rank + '  '+rank.fname;
                    option.value = rank.id;
                    selectField2.add(option);
                });
            });
    } else if (selectField1.value === "civilians") {
        fetch('/get-civilian-data')
            .then(response => response.json())
            .then(data => {
                var option = document.createElement("option");
option.text = "--Select Name Number--";
option.value = ""; 
selectField2.add(option);
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
    if (selectField1.value === "officers") {
        fetch('/get-officer-data')
            .then(response => response.json())
            .then(data => {
                 var option = document.createElement("option");
                    option.text = "--Select Category--";
                    selectField2.add(option);
                var selectedOfficer = data.find(officer => officer.service === selectField2.value);
                if (selectedOfficer) {
                    rankInput.value = s
                    electedOfficer.rank;
                    lastNameInput.value = selectedOfficer.lname;
                    firstNameInput.value = selectedOfficer.fname;
                    genderInput.value = selectedOfficer.arm;
                }
            });
    } else if (selectField1.value === "ranks") {
        fetch('/get-rank-data')
            .then(response => response.json())
            .then(data => {
                 var option = document.createElement("option");
                    option.text = "--Select Category--";
                    selectField2.add(option);
                var selectedSoldier = data.find(rank => rank.service === selectField2.value);
                if (selectedSoldier) {
                    rankInput.value = selectedSoldier.rank;
                    lastNameInput.value = selectedSoldier.lname;
                    firstNameInput.value = selectedSoldier.fname;
                    genderInput.value = selectedSoldier.arm;
                }
            });
    } else if (selectField1.value === "civilians") {
        fetch('/get-civilian-data')
            .then(response => response.json())
            .then(data => {
                 var option = document.createElement("option");
                    option.text = "--Select Category--";
                    selectField2.add(option);
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

                        <h5 class="mt-5">Transfer Details</h5>
                        <hr>
                        <div class="row">
                        <div class="col-md-6">
                                <label for="exampleInputPassword1">Type of Postings<b style="color:red;">*</b></label>
                                <select class="form-control" name="type">
                                    <option>--Select Type--</option>
                                    <option value="Attachment">Attachment</option>
                                    <option value="Posting">Posting</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Posted From<b style="color:red;">*</b></label>
                                 <input type="text" name="posted_from" class="form-control" placeholder="Enter unit posted from">                                    
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Posted To<b style="color:red;">*</b></label>
                                 <input type="text" name="posted_to" class="form-control" placeholder="Enter unit posted to">                                    
                            </div>
                        </div>
                        <h5 class="mt-5">Date</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Posted Date<b style="color:red;">*</b></label>
                                 <input type="date" class="form-control" name="posted_date" placeholder="Enter posted date">                                    
                            </div>
                        </div>
                        <h5 class="mt-5">Details</h5>
                        <hr>
                        <div class="row">
                        <div class="col-md-6">
                                <label for="exampleInputPassword1">Appointment<b style="color:red;">*</b></label>
                                 <input type="text" class="form-control" name="appointment" placeholder="Enter appointment">                                    
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Remarks</label>
                                 <textarea type="text" class="form-control" name="remarks" placeholder="Enter remarks"> </textarea>                               
                            </div>
                        </div>
                                <div class="input-group cust-file-button">
                                    <div class="custom-file">
                                        <a href="{{url('/deployment')}}">Cancel</a>
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