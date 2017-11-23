<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Simeon Art</title>

	<!-- <link href="css/app.css" rel="stylesheet" type="text/css"> -->
	<link href="css/compiled.min.css" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Material Design Bootstrap -->
	<link href="css/mdb.min.css" rel="stylesheet">

	<!-- Template styles -->
	<link href="css/style.css" rel="stylesheet">

</head>
<body>
	<!--Navbar-->
	<nav class="navbar navbar-toggleable-md navbar-dark scrolling-navbar fixed-top">
		<div class="container">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapseEx2" aria-controls="collapseEx2" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="#">
				<img src="css/images/logo.png" width="80" alt="Simeon Art"/>
			</a>
			<div class="collapse navbar-collapse" id="collapseEx2">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link waves-effect waves-light">Home <span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item btn-group">
						<a class="nav-link dropdown-toggle waves-effect waves-light" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Traditional art</a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<a class="dropdown-item" href="#">Drawings</a>
							<a class="dropdown-item" href="#">Paintings</a>
							<a class="dropdown-item" href="#">Sculptures</a>
						</div>
					</li>

					<li class="nav-item btn-group">
						<a class="nav-link dropdown-toggle waves-effect waves-light" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Design</a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<a class="dropdown-item" href="#">Porcelain</a>
							<a class="dropdown-item" href="#">Glass</a>
							<a class="dropdown-item" href="#">Jewelry</a>
							<a class="dropdown-item" href="#">Others</a>
						</div>
					</li>

					<li class="nav-item">
						<a class="nav-link waves-effect waves-light">Contacts</a>
					</li>
				</ul>
				<ul class="navbar-nav nav-flex-icons">
					<li class="nav-item">
						<a class="nav-link waves-effect waves-light"><i class="fa fa-facebook fa-15x"></i></a>
					</li>

					<li class="nav-item">
						<a class="nav-link waves-effect waves-light"><i class="fa fa-youtube fa-15x"></i></a>
					</li>
				</ul>
			</div>
		</div><!--/.Container-->
	</nav>
	<!--/.Navbar-->

	<!--Main Layout-->
	<main>
		<div class="container">
			
		
<!--Section: Contact v.1-->
<section class="section pb-5">

	<!--Section heading-->
	<h2 class="section-heading h1 pt-4">Contact us</h2>
	<!--Section description-->
	<p class="section-description pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

	<div class="row">

		<!--Grid column-->
		<div class="col-lg-5 mb-4">

			<!--Form with header-->
			<div class="card">

				<div class="card-body">
					<!--Header-->
					<div class="form-header blue accent-1">
						<h3><i class="fa fa-envelope"></i> Write to us:</h3>
					</div>

					<p>We'll write rarely, but only the best content.</p>
					<br>

					<!--Body-->
					<div class="md-form">
						<i class="fa fa-user prefix grey-text"></i>
						<input type="text" id="form-name" class="form-control">
						<label for="form-name">Your name</label>
					</div>

					<div class="md-form">
						<i class="fa fa-envelope prefix grey-text"></i>
						<input type="text" id="form-email" class="form-control">
						<label for="form-email">Your email</label>
					</div>

					<div class="md-form">
						<i class="fa fa-tag prefix grey-text"></i>
						<input type="text" id="form-Subject" class="form-control">
						<label for="form-Subject">Subject</label>
					</div>

					<div class="md-form">
						<i class="fa fa-pencil prefix grey-text"></i>
						<textarea type="text" id="form-text" class="md-textarea"></textarea>
						<label for="form-text">Icon Prefix</label>
					</div>

					<div class="text-center">
						<button class="btn btn-light-blue">Submit</button>
					</div>

				</div>

			</div>
			<!--Form with header-->

		</div>
		<!--Grid column-->

		<!--Grid column-->
		<div class="col-lg-7">

			<!--Google map-->
			<div id="map-container" class="z-depth-1-half map-container" style="height: 400px"></div>

			<br>
			<!--Buttons-->
			<div class="row text-center">
				<div class="col-md-4">
					<a class="btn-floating blue accent-1"><i class="fa fa-map-marker"></i></a>
					<p>Sofia, 1700</p>
					<p>Bulgaria</p>
				</div>

				<div class="col-md-4">
					<a class="btn-floating blue accent-1"><i class="fa fa-phone"></i></a>
					<p>+359 5 98 65 35</p>
					<p>Mon - Fri, 8:00-22:00</p>
				</div>

				<div class="col-md-4">
					<a class="btn-floating blue accent-1"><i class="fa fa-envelope"></i></a>
					<p>info@simeon-art.com</p>
					<p>sale@simeon-art.com</p>
				</div>
			</div>

		</div>
	   <!--Grid column-->

	</div>

</section>
<!--Section: Contact v.1-->
<!-- 		<div class="container" style="height:1300px;">
			<div class="row mt-5 pt-5">
				<div class="col text-center">
					<h2>This Navbar is fixed</h2>
					<h5>It will always stay visible on the top, even when you scroll down</h5>
					<br>
					<p>Full page intro with background image will be always displayed in full screen mode, regardless of device </p>
				</div>
			</div>
		</div> -->
		</div>
	</main>
	<!--Main Layout-->

	<!--Footer-->
	<footer class="page-footer center-on-small-only">

		<!--Footer Links-->
		<div class="container-fluid">
			<div class="row">
				<!--First column-->
				<div class="col-md-3 offset-md-1">
					<h5 class="title">ABOUT MATERIAL DESIGN</h5>
					<p>Material Design (codenamed Quantum Paper) is a design language developed by Google. </p>

					<p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS, and JS framework - Bootstrap.</p>
				</div>
				<!--/.First column-->

				<hr class="hidden-md-up">

				<!--Second column-->
				<div class="col-md-2 offset-md-1">
					<h5 class="title">Traditional art</h5>
					<ul>
						<li><a href="#!">Drawings</a></li>
						<li><a href="#!">Paintings</a></li>
						<li><a href="#!">Sculptures</a></li>
					</ul>
				</div>
				<!--/.Second column-->

				<hr class="hidden-md-up">

				<!--Third column-->
				<div class="col-md-2">
					<h5 class="title">Design</h5>
					<ul>
						<li><a href="#!">Porcelain</a></li>
						<li><a href="#!">Glass</a></li>
						<li><a href="#!">Jewelry</a></li>
						<li><a href="#!">Others</a></li>
					</ul>
				</div>
				<!--/.Third column-->

				<hr class="hidden-md-up">

				<!--Fourth column-->
				<div class="col-md-2">
					<h5 class="title">Third column</h5>
					<ul>
						<li><a href="#!">Link 1</a></li>
						<li><a href="#!">Link 2</a></li>
						<li><a href="#!">Link 3</a></li>
						<li><a href="#!">Link 4</a></li>
					</ul>
				</div>
				<!--/.Fourth column-->
			</div>
		</div>
		<!--/.Footer Links-->

		<!--Copyright-->
		<div class="footer-copyright">
			<div class="container-fluid">
				<span>Simeon-Art.com &copy; Copyright <?php echo date("Y"); ?></span>
			</div>
		</div>
		<!--/.Copyright-->

	</footer>
	<!--/.Footer-->

	<div class="hiddendiv common"></div>

	<!-- Placed at the end of the document so the pages load faster -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
	<!-- <script src="js/app.js"></script> -->
	<script src="js/compiled.min.js"></script>
	<!-- Google Maps -->
	<script src="https://maps.google.com/maps/api/js"></script>
	<script>
		function init_map() {
			var var_location = new google.maps.LatLng(40.725118, -73.997699);

			var var_mapoptions = {
				center: var_location,
				zoom: 14
			};

			var var_marker = new google.maps.Marker({
				position: var_location,
				map: var_map,
				title: "Sofia"
			});

			var var_map = new google.maps.Map(document.getElementById("map-container"),
				var_mapoptions);

			var_marker.setMap(var_map);

		}

		google.maps.event.addDomListener(window, 'load', init_map);
	</script>
</body>
</html>
