<!DOCTYPE html>
<html lang="en">

<head>

	<title>GAF ASOB</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/logo.png" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	


</head>

<!-- [ signin-img ] start -->
<div class="auth-wrapper align-items-stretch aut-bg-img">
	<div class="flex-grow-1">
		<div class="h-100 d-md-flex align-items-center auth-side-img">
			<div class="col-sm-10 auth-content w-auto">
				<img src="assets/images/logo.png" height="80px" width="80px" alt="" class="img-fluid">
				<h1 class="text-white my-4">Welcome to GAF ASOB</h1>
			</div>
		</div>
		<div class="auth-side-form">
			<div class=" auth-content">
				<form action="{{ route('register') }}" method="POST">
					@csrf
				<img src="assets/images/logo.png" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
				<h3 class="mb-4 f-w-400">Registration</h3>
				<div class="form-group mb-3">
					<label class="floating-label" for="Email">Fullname</label>
					<input type="text" name="name" class="form-control" placeholder="">
				</div>

				<div class="form-group mb-3">
					<label class="floating-label" for="Email">Email</label>
					<input type="text" name="email" class="form-control" placeholder="">
				</div>

				<div class="form-group mb-3">
					<label class="floating-label" for="Email">Password</label>
					<input type="password" name="password" class="form-control" placeholder="">
				</div>

				<div class="form-group mb-3">
					<label class="floating-label" for="Email">Confirm Password</label>
					<input type="password" name="password_confirmation" class="form-control" placeholder="">
				</div>
				<button class="btn btn-block btn-primary mb-4" value="submit" type="submit">Signup</button>
				<div class="text-center">
					<div class="saprator my-4"><span>OR</span></div>
					<p class="mb-0 text-muted">Already have account? <a href="{{url('/login')}}" class="f-w-400">Signin</a></p>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- [ signin-img ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>
