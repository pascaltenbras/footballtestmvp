<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Custom Fonts -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	<!-- Theme CSS -->
	<link href="css/agency.min.css" rel="stylesheet">

	@yield('header')
</head>
<body>

	<header>
		<div class="row">
			<div class="col-lg-9"></div>
			<div class="col-lg-2">
				<a href="#" class="social"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
				<a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			</div>
		</div>
	</header>
	<!-- _______________________________________________________________ -->

	@yield('content')

	<!-- _______________________________________________________________ -->

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

	<!-- Custom Javascript -->
	<script src="js/mustache.js"></script>
	@yield('scripts')
</body>
</html>