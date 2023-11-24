<!DOCTYPE html>
<html lang="en">

<head>
    <title>ASOB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">

    <!-- vendor css -->
	 <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/ekko-lightbox.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/plugins/lightbox.min.css')}}">
    <link  rel="stylesheet" type="text/css"  href="{{ asset('assets/select2/css/select2.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    <link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" >
    <link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" >
{{-- 

 --}}
 @yield('css')
</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menupos-fixed menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img  src="/asob.png" height="70px" width="70px" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details">ASOB
                                
                                <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-inline">
						<li class="list-inline-item">
    <a href="{{ route('logout') }}" data-toggle="tooltip" title="Logout" class="text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="feather icon-power"></i>
    </a>
</li>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-hasmenu">
						<a href="{{url('/home')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
			
				    
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user-check"></i></span><span class="pcoded-mtext">Personnel</span></a>
						<ul class="pcoded-submenu">
						@can('officers_list')
							<li><a href="{{url('/officers-portal')}}">Officers</a></li>
						@endcan

						@can('soldiers_list')
							<li><a href="{{url('/ranks-portal')}}">Soilders</a></li>
						@endcan
							<!-- <li><a href="{{url('/civilians-portal')}}">Civilians</a></li> -->
						</ul>
					</li>
					@can('operation_list')
					<li class="nav-item pcoded-hasmenu">
						<a href="{{url('/un')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-book"></i></span><span class="pcoded-mtext">Operations</span></a>
					</li>
					@endcan
					{{-- <li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-gitlab"></i></span><span class="pcoded-mtext">Operations Portal</span></a>
						<ul class="pcoded-submenu">
							<li><a href="{{url('/un')}}">UN Operations</a></li>
							<li><a href="{{url('/local')}}">Internal Operations</a></li>
						</ul>
					</li> --}}
							{{-- <li><a href="{{url('/attachments')}}">Attachments</a></li> --}}
							@can('postings_list')
							<li class="nav-item pcoded-hasmenu"><a href="{{url('/deployment')}}"><span class="pcoded-micon"><i class="feather icon-book"></i></span><span class="pcoded-mtext">Postings</a></li>
							@endcan
						

					@can('courses_list')
					<li class="nav-item pcoded-hasmenu">
						<a href="{{url('/personnel_courses')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-book"></i></span><span class="pcoded-mtext">Courses</span></a>
					</li>
					@endcan

					@can('leave_list')
					<li class="nav-item pcoded-hasmenu">
						<a href="{{url('/leave')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Leave</span></a>
					</li>
					@endcan

					</li>
						 <li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Report</span></a>
						<ul class="pcoded-submenu">

						@can('course_report')
							<li><a href="{{url('recour')}}">Courses</a></li>
						@endcan

						@can('operation_report')
							<li><a href="{{url('reope')}}">Operations</a></li>
						@endcan

						{{-- @can('postings_report')
							<li><a href="{{url('repos')}}">Postings</a></li>
						@endcan --}}
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Settings</span></a>
						<ul class="pcoded-submenu">
						@can('cselist_list')	
							<li><a href="{{route('courses.index')}}">Courses</a></li>
						@endcan

						@can('users_list')	
							<li><a href="{{url('/users')}}">Users</a></li>
						@endcan

						@can('roles_list')	
							<li><a href="{{url('/roles')}}">Roles</a></li>
						@endcan

						</ul>
					</li>

					@can('confidential_report')	
					<li class="nav-item pcoded-hasmenu">
						<a href="{{url('repos')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Confidential Report</span></a>
					</li>
					@endcan
				</ul>
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav ml-auto">
						
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="assets/images/logo.png" class="img-radius" alt="User-Profile-Image">
										<span>{{Auth::user()->name}}</span>
										<a href="#" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
										
									</div>
									<form method="POST" action="{{ route('logout') }}" id="logout-form" style="display: none;">
                                        @csrf
                                     </form>

                                    <ul class="pro-body">
                                   <li>
                                <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                 <i class="feather icon-user"></i> Logout
                                </a>
                             </li>
                                  </ul>

								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
	<section class="pcoded-main-container">
    <div class="pcoded-content">
	@yield('headers')
	</div>
	</section>
</div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
            <div class="flex flex-1 mx-auto">&copy;GAF Support Service</div>
            <div class="flex flex-1 mx-auto">Designed by:  <a href="#" target=" _blank">  Michael Akrobo</a></div>
        </footer>
        <!--/footer-->

    </div>

</div>
<script src="./main.js"></script>


<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
<script>
  swal("{{session('status')}}");
  </script>
@endif
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.23/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/b-html5-1.6.5/b-print-1.6.5/datatables.min.js"></script>


<script src="{{ asset('assets/js/select2.min.js') }}"></script>


<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>


    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
	<script src="assets/js/menu-setting.min.js"></script>
<!-- select2 Js -->
<script src="assets/js/plugins/select2.full.min.js"></script>
<!-- form-select-custom Js -->
<script src="assets/js/pages/form-select-custom.js"></script>
<!-- datatable Js -->
<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    setTimeout(function() {
        $('#simpletable').DataTable();
    }, 600);
</script>
<script>
      $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>

@stack('scripts')
</body>
</html>
