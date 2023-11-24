@extends('admin.layout.header')
@section('headers')
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"></h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="*"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Leave</a></li>
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
                        <h5>Leave - Add Page</h5>
                    </div>
                    <div class="card-body">
                        <h5>Category</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <form method="POST" action="{{url('/add-new-leave')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group ">
                                        <label>Personnel Category<b style="color:red;">*</b></label>
                                    <select name="category" id="select-field-1" class="mb-3 form-control">
                                        <option>--Select category--</option>
                                        <option value="Officers">Officer</option>
                                        <option value="Ranks">Soldier</option>
                                        {{-- <option value="Civilian">Civilian</option> --}}
                                    </select>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name<b style="color:red;">*</b></label>
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

  if (selectField1.value === "Officers") {
                                        fetch('/get-officer-data')
                                            .then(response => response.json())
                                            .then(data => {
                                                var option = document.createElement("option");
                                                option.text = "--Select Name--";
                                                option.value = " "; 
                                                selectField2.add(option);
                                                data.forEach(officer => {
                                                    var option = document.createElement("option");
                                                    option.text = officer.service + '  ' +officer.rank + '  '+officer.fname ;
                                                    option.value = officer.id; 
                                                    selectField2.add(option);
                                                });
                                            });
            
    } else if(selectField1.value === "Ranks") {
        fetch('/get-rank-data')
            .then(response => response.json())
            .then(data => {
                var option = document.createElement("option");
                option.text = "--Select Name--";
                option.value = " "; 
                selectField2.add(option);
                data.forEach(rank => {
                  var option = document.createElement("option");
                                                    option.text = rank.service + '  ' +rank.rank + '  '+rank.fname ;
                                                    option.value = rank.id; 
                                                    selectField2.add(option);
                                                });
                                            });
    } 
});


</script>
<h5 class="mt-5">Details</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Type<b style="color:red;">*</b></label>
                                <select name="type" id="select-field-1" class="mb-3 form-control">
                                        <option>--Select type--</option>
                                        <option value="Leave">Leave</option>
                                        <option value="Pass">Pass</option>
                                    </select>                           
                                 </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Reason<b style="color:red;">*</b></label>
                                 <textarea type="text" class="form-control" name="reason" placeholder="Enter reason">  </textarea>                                  
                            </div>
                        </div>
                        <h5 class="mt-5">Date</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Start Date<b style="color:red;">*</b></label>
                                 <input type="date" class="form-control" name="start_date" placeholder="Enter course start date">                                    
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">End Date<b style="color:red;">*</b></label>
                                 <input type="date" class="form-control" name="end_date" placeholder="Enter course end date">                                    
                            </div>
                        </div>
                        <h5 class="mt-5">More Info</h5>
                        <hr>
                        <div class="row">
                        <div class="col-md-6">
                                <label for="exampleInputPassword1">Approved By<b style="color:red;">*</b></label>
                                 <input type="text" class="form-control" name="approval" placeholder="Enter who approved the leave">                                    
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Remarks</label>
                                 <textarea type="text" class="form-control" name="remarks" placeholder="Enter remarks"> </textarea>                               
                            </div>
                        </div>
                                <div class="input-group cust-file-button">
                                    <div class="custom-file">
                                        <a href="{{url('/leave')}}">Cancel</a>
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
