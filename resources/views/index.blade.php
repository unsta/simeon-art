<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Simeon Art</title>

	<!-- <link href="css/app.css" rel="stylesheet" type="text/css"> -->
	<link href="css/compiled.min.css" rel="stylesheet" type="text/css">
	<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

</head>
<body>

	<!--Main Navigation-->
	<header>

		<!--Navbar-->
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">

			<!-- Navbar brand -->
			<a class="navbar-brand" href="#">
				<img src="css/images/logo.png" width="80" alt="Simeon Art"/>
			</a>

			<!-- Collapse button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

			<!-- Collapsible content -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<!-- Links -->
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>

					<!-- Dropdown -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Traditional art </a>
						<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Drawings</a>
							<a class="dropdown-item" href="#">Paintings</a>
							<a class="dropdown-item" href="#">Sculptures</a>
						</div>
					</li>

					<!-- Dropdown -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Design </a>
						<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Porcelain</a>
							<a class="dropdown-item" href="#">Glass</a>
							<a class="dropdown-item" href="#">Jewelry</a>
							<a class="dropdown-item" href="#">Others</a>
						</div>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#">Contacts</a>
					</li>
				</ul>

				<ul class="navbar-nav ml-auto nav-flex-icons">
					<li class="nav-item">
						<a class="nav-link waves-effect waves-light"><i class="fa fa-facebook fa-15x"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link waves-effect waves-light"><i class="fa fa-youtube fa-15x"></i></a>
					</li>
				</ul>
				<!-- Links -->
			</div>
			<!-- Collapsible content -->

		</nav>
		<!--/.Navbar-->

	</header>
	<!--Main Navigation-->
	
	<!--Main Layout-->
	<main>
		<div class="container" style="height:1300px;">
			<div class="row mt-5 pt-5">
				<div class="col text-center">
					<h2>This Navbar is fixed</h2>
					<h5>It will always stay visible on the top, even when you scroll down</h5>
					<br>
					<p>Full page intro with background image will be always displayed in full screen mode, regardless of device </p>
				</div>
			</div>
		</div>
	</main>
	<!--Main Layout-->

	<div class="hiddendiv common"></div>

	<!-- Placed at the end of the document so the pages load faster -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
	<!-- <script src="js/app.js"></script> -->
	<script src="js/compiled.min.js"></script>
</body>
</html>
