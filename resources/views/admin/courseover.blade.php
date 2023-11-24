@include('admin.layout.header')

	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Course Oversea</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ task-list ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"><h5>Oversea Courses</h5> 
                    <a href="{{url('/printallco')}}"><button class="btn btn-primary" style="border-radius:200px;width:150px;background-color:#c2a024"><b>Print All</b></button></a> 

                        <a href="{{url('/add-course-oversea')}}" style="float:right;"><b>Add new +</b></a>
                    </div>
                    <div class="card-body task-data">
                        <div class="table-responsive form-material">
                            <table id="simpletable" class="table dt-responsive task-list-table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Service #</th>
                                        <th>Course Name</th>
                                        <th>Location</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="task-page"> 
                                    @foreach($courseo as $cos)
                                    <tr>
                                        <td><b>{{$cos->service}}</b></th>
											<td>{{$cos->course}}</td>
											<td>{{$cos->to}}</td>
                                            <td>{{$cos->end_date}}</td>
                                            <td>
                                        <a href="{{url('/edit-course-over/'.$cos->id)}}" style="color:black;"><i class="fas fa-edit"></i></a>
                                            <a href="{{url('/view-course-over/'.$cos->id)}}" style="color:blue;"><i class="fas fa-eye"></i></a>
                                            <a href="#" onclick="confirmDelete('{{url('/delete-course-over/'.$cos->id)}}')" style="color:red;"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                    <script>
                                        function confirmDelete(url) {
                                            if (confirm("Are you sure you want to delete this oversea course ?")) {
                                                window.location.href = url;
                                            }
                                        }
                                    </script>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
        <!-- [ Main Content ] end -->
    </div>
</section>

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
	<script src="assets/js/menu-setting.min.js"></script>

<!-- datatable Js -->
<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    setTimeout(function() {
        $('#simpletable').DataTable();
    }, 600);
</script>


</body>
</html>
