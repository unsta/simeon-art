<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Simeon Art</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Prociono" rel="stylesheet">

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
						<a href="{{ url('/contacts') }}" class="nav-link waves-effect waves-light">Contacts</a>
					</li>
				</ul>
				<ul class="navbar-nav nav-flex-icons">
					<li class="nav-item">
						<a href="" target="_blank" class="nav-link waves-effect waves-light"><i class="fa fa-facebook fa-15x"></i></a>
					</li>

					<li class="nav-item">
						<a href="https://www.youtube.com/channel/UCsH7qdS62MQtsm7uhYTboFg/videos" target="_blank" class="nav-link waves-effect waves-light"><i class="fa fa-youtube fa-15x"></i></a>
					</li>
				</ul>
			</div>
		</div><!--/.Container-->
	</nav>
	<!--/.Navbar-->

	<!--Carousel Wrapper-->
	<div id="carousel-example-1" class="carousel slide carousel-viewport" data-ride="carousel" data-interval="false">
		<!--Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-1" data-slide-to="1"></li>
		</ol>
		<!--/.Indicators-->

		<!--Slides-->
		<div class="carousel-inner" role="listbox">
			<!--First slide-->
			<div class="carousel-item active">
				<!--Mask-->
				<div class="view hm-black-light">
					<div class="full-bg-img flex-center"></div>
				</div>

				<div class="carousel-caption">
					<a href="#">
						<h3 class="h1-responsive">Traditional Art</h3>
					</a>
				</div>
				<!--/.Mask-->
			</div>
			<!--/.First slide-->

			<!--Second slide -->
			<div class="carousel-item">
				<!--Mask-->
				<div class="view hm-black-light"></div>

				<div class="carousel-caption">
					<a href="#">
						<h3 class="h1-responsive">Design</h3>
					</a>
				</div>                
				<!--/.Mask-->
			</div>
			<!--/.Second slide -->
		</div>
		<!--/.Slides-->

		<!--Controls-->
		<a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!--/.Controls-->
	</div>
	<!--/.Carousel Wrapper-->

	<!--Main Layout-->
	<main>
		<div class="container">
<!-- 			<div class="row mt-5 pt-5">
				<div class="col text-center">
					<h2>This Navbar is fixed</h2>
					<h5>It will always stay visible on the top, even when you scroll down</h5>
					<br>
					<p>Full page intro with background image will be always displayed in full screen mode, regardless of device </p>
				</div>
			</div> -->

			<!--Section: Products v.5-->
			<section class="section">

				<!--Section heading-->
				<h1 class="section-heading h1">New Products</h1>

				<!--Carousel Wrapper-->
				<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
					<!--Slides-->
					<div class="carousel-inner" role="listbox">

						<!--First slide-->
						<div class="carousel-item active">

							<div class="col-md-4">

								<!--Card-->
								<div class="card card-cascade narrower">

									<!--Card image-->
									<div class="view overlay hm-white-slight">
										<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(39).jpg" class="img-fluid" alt="">
										<a>
											<div class="mask"></div>
										</a>
									</div>
									<!--Card image-->

									<!--Card content-->
									<div class="card-body text-center no-padding">
										<!--Category & Title-->
										<a href="" class="text-muted"><h5>Shoes</h5></a>
										<h4 class="card-title"><strong><a href="">Leather boots</a></strong></h4>

										<!--Card footer-->
										<div class="card-footer">
											<span class="left">69$</span>
										</div>

									</div>
									<!--Card content-->

								</div>
								<!--Card-->

							</div>

							<div class="col-md-4 clearfix d-none d-md-block">

								<!--Card-->
								<div class="card card-cascade narrower">

									<!--Card image-->
									<div class="view overlay hm-white-slight">
										<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(22).jpg" class="img-fluid" alt="">
										<a>
											<div class="mask"></div>
										</a>
									</div>
									<!--Card image-->

									<!--Card content-->
									<div class="card-body text-center no-padding">
										<!--Category & Title-->
										<a href="" class="text-muted"><h5>Jeans</h5></a>
										<h4 class="card-title"><strong><a href="">Slim jeans</a></strong></h4>

										<!--Card footer-->
										<div class="card-footer">
											<span class="left">99$</span>
										</div>

									</div>
									<!--Card content-->

								</div>
								<!--Card-->

							</div>

							<div class="col-md-4 clearfix d-none d-md-block">

								<!--Card-->
								<div class="card card-cascade narrower">

									<!--Card image-->
									<div class="view overlay hm-white-slight">
										<img src="https://mdbootstrap.com/img/Photos/Others/img%20(31).jpg" class="img-fluid" alt="">
										<a>
											<div class="mask"></div>
										</a>
									</div>
									<!--Card image-->

									<!--Card content-->
									<div class="card-body text-center no-padding">
										<!--Category & Title-->
										<a href="" class="text-muted"><h5>Shorts</h5></a>
										<h4 class="card-title"><strong><a href="">Denim shorts</a></strong></h4>

										<!--Card footer-->
										<div class="card-footer">
											<span class="left">49$</span>
										</div>

									</div>
									<!--Card content-->

								</div>
								<!--Card-->

							</div>

						</div>
						<!--First slide-->

						<!--Second slide-->
						<div class="carousel-item">

							<div class="col-md-4">

								<!--Card-->
								<div class="card card-cascade narrower">

									<!--Card image-->
									<div class="view overlay hm-white-slight">
										<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(30).jpg" class="img-fluid" alt="">
										<a>
											<div class="mask"></div>
										</a>
									</div>
									<!--Card image-->

									<!--Card content-->
									<div class="card-body text-center no-padding">
										<!--Category & Title-->
										<a href="" class="text-muted"><h5>Accessories</h5></a>
										<h4 class="card-title"><strong><a href="">Summer hat</a></strong></h4>

										<!--Card footer-->
										<div class="card-footer">
											<span class="left">39$</span>
										</div>

									</div>
									<!--Card content-->

								</div>
								<!--Card-->

							</div>

							<div class="col-md-4 clearfix d-none d-md-block">

								<!--Card-->
								<div class="card card-cascade narrower">

									<!--Card image-->
									<div class="view overlay hm-white-slight">
										<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(37).jpg" class="img-fluid" alt="">
										<a>
											<div class="mask"></div>
										</a>
									</div>
									<!--Card image-->

									<!--Card content-->
									<div class="card-body text-center no-padding">
										<!--Category & Title-->
										<a href="" class="text-muted"><h5>Shoes</h5></a>
										<h4 class="card-title"><strong><a href="">Black heels</a></strong></h4>

										<!--Card footer-->
										<div class="card-footer">
											<span class="left">79$</span>
										</div>

									</div>
									<!--Card content-->

								</div>
								<!--Card-->

							</div>

							<div class="col-md-4 clearfix d-none d-md-block">

								<!--Card-->
								<div class="card card-cascade narrower">

									<!--Card image-->
									<div class="view overlay hm-white-slight">
										<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(31).jpg" class="img-fluid" alt="">
										<a>
											<div class="mask"></div>
										</a>
									</div>
									<!--Card image-->

									<!--Card content-->
									<div class="card-body text-center no-padding">
										<!--Category & Title-->
										<a href="" class="text-muted"><h5>Outerwear</h5></a>
										<h4 class="card-title"><strong><a href="">Black jacket</a></strong></h4>

										<!--Card footer-->
										<div class="card-footer">
											<span class="left">149$</span>
										</div>

									</div>
									<!--Card content-->

								</div>
								<!--Card-->

							</div>

						</div>
						<!--Second slide-->

						<!--Third slide-->
						<div class="carousel-item">

							<div class="col-md-4">

								<!--Card-->
								<div class="card card-cascade narrower">

									<!--Card image-->
									<div class="view overlay hm-white-slight">
										<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(38).jpg" class="img-fluid" alt="">
										<a>
											<div class="mask"></div>
										</a>
									</div>
									<!--Card image-->

									<!--Card content-->
									<div class="card-body text-center no-padding">
										<!--Category & Title-->
										<a href="" class="text-muted"><h5>Accessories</h5></a>
										<h4 class="card-title"><strong><a href="">Leather bag</a></strong></h4>

										<!--Card footer-->
										<div class="card-footer">
											<span class="left">29$</span>
										</div>

									</div>
									<!--Card content-->

								</div>
								<!--Card-->

							</div>

							<div class="col-md-4 clearfix d-none d-md-block">

								<!--Card-->
								<div class="card card-cascade narrower">

									<!--Card image-->
									<div class="view overlay hm-white-slight">
										<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/belt.jpg" class="img-fluid" alt="">
										<a>
											<div class="mask"></div>
										</a>
									</div>
									<!--Card image-->

									<!--Card content-->
									<div class="card-body text-center no-padding">
										<!--Category & Title-->
										<a href="" class="text-muted"><h5>Accessories</h5></a>
										<h4 class="card-title"><strong><a href="">Leather belt</a></strong></h4>

										<!--Card footer-->
										<div class="card-footer">
											<span class="left">89$</span>
										</div>

									</div>
									<!--Card content-->

								</div>
								<!--Card-->

							</div>

							<div class="col-md-4 clearfix d-none d-md-block">

								<!--Card-->
								<div class="card card-cascade narrower">

									<!--Card image-->
									<div class="view overlay hm-white-slight">
										<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(57).jpg" class="img-fluid" alt="">
										<a>
											<div class="mask"></div>
										</a>
									</div>
									<!--Card image-->

									<!--Card content-->
									<div class="card-body text-center no-padding">
										<!--Category & Title-->
										<a href="" class="text-muted"><h5>Shoes</h5></a>
										<h4 class="card-title"><strong><a href="">Sneakers</a></strong></h4>

										<!--Card footer-->
										<div class="card-footer">
											<span class="left">129$</span>
										</div>

									</div>
									<!--Card content-->

								</div>
								<!--Card-->

							</div>

						</div>
						<!--Third slide-->

					</div>
					<!--Slides-->

					<!--Controls-->
					<div class="controls-top">
						<a class="btn-floating warning-color" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
						<a class="btn-floating warning-color" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
					</div>
					<!--Controls-->
				</div>
				<!--Carousel Wrapper-->

			</section>
			<!--Section: Products v.5-->

			<hr />

			<!--Section: Products v.4-->
			<section class="section">

				<!--Section heading-->
				<h1 class="section-heading h1">Categories</h1>

				<!--Grid row-->
				<div class="row">
					<!--Grid column-->
					<div class="col-lg-3 col-md-6 mb-r">

						<!--Collection card-->
						<div class="card collection-card z-depth-1-half">
							<!--Card image-->
							<div class="view  hm-zoom">
								<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(28).jpg" class="img-fluid" alt="">
								<div class="stripe dark">
									<a>
										<p>Design <i class="fa fa-chevron-right"></i></p>
									</a>
								</div>
							</div>
							<!--Card image-->
						</div>
						<!--Collection card-->

					</div>
					<!--Grid column-->

					<!--Grid column-->
					<div class="col-lg-3 col-md-6 mb-r">

						<!--Collection card-->
						<div class="card collection-card z-depth-1-half">
							<!--Card image-->
							<div class="view  hm-zoom">
								<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(26).jpg" class="img-fluid" alt="">
								<div class="stripe light">
									<a>
										<p>Paintings <i class="fa fa-chevron-right"></i></p>
									</a>
								</div>
							</div>
							<!--Card image-->
						</div>
						<!--Collection card-->

					</div>
					<!--Grid column-->

					<!--Grid column-->
					<div class="col-lg-3 col-md-6 mb-r">

						<!--Collection card-->
						<div class="card collection-card z-depth-1-half">
							<!--Card image-->
							<div class="view  hm-zoom">
								<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(31).jpg" class="img-fluid" alt="">
								<div class="stripe dark">
									<a>
										<p>Sculptures <i class="fa fa-chevron-right"></i></p>
									</a>
								</div>
							</div>
							<!--Card image-->
						</div>
						<!--Collection card-->
					</div>
					<!--Grid column-->
				</div>
				<!--Grid row-->

				<!--Grid row-->
				<div class="row">
					<!--Grid column-->
					<div class="col-lg-3 col-md-6 mb-r">

						<!--Collection card-->
						<div class="card collection-card z-depth-1-half">
							<!--Card image-->
							<div class="view  hm-zoom">
								<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(28).jpg" class="img-fluid" alt="">
								<div class="stripe dark">
									<a>
										<p>Porcelain <i class="fa fa-chevron-right"></i></p>
									</a>
								</div>
							</div>
							<!--Card image-->
						</div>
						<!--Collection card-->

					</div>
					<!--Grid column-->

					<!--Grid column-->
					<div class="col-lg-3 col-md-6 mb-r">

						<!--Collection card-->
						<div class="card collection-card z-depth-1-half">
							<!--Card image-->
							<div class="view  hm-zoom">
								<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(26).jpg" class="img-fluid" alt="">
								<div class="stripe light">
									<a>
										<p>Glass <i class="fa fa-chevron-right"></i></p>
									</a>
								</div>
							</div>
							<!--Card image-->
						</div>
						<!--Collection card-->

					</div>
					<!--Grid column-->

					<!--Grid column-->
					<div class="col-lg-3 col-md-6 mb-r">
						<!--Collection card-->
						<div class="card collection-card z-depth-1-half">
							<!--Card image-->
							<div class="view  hm-zoom">
								<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(31).jpg" class="img-fluid" alt="">
								<div class="stripe dark">
									<a>
										<p>Jewelry <i class="fa fa-chevron-right"></i></p>
									</a>
								</div>
							</div>
							<!--Card image-->
						</div>
						<!--Collection card-->
					</div>
					<!--Grid column-->

					<!--Grid column-->
					<div class="col-lg-3 col-md-6 mb-r">

						<!--Collection card-->
						<div class="card collection-card z-depth-1-half">
							<!--Card image-->
							<div class="view  hm-zoom">
								<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(26).jpg" class="img-fluid" alt="">
								<div class="stripe light">
									<a>
										<p>Others <i class="fa fa-chevron-right"></i></p>
									</a>
								</div>
							</div>
							<!--Card image-->
						</div>
						<!--Collection card-->

					</div>
					<!--Grid column-->
				</div>
				<!--Grid row-->
			</section>
			<!--Section: Products v.4-->			
		</div>
	</main><!--Container-->
	<!--Main Layout-->

	<!--Footer-->
	<footer class="page-footer center-on-small-only">

		<!--Footer Links-->
		<div class="container">
			<div class="row">
				<!--First column-->
				<div class="col-md-3">
					<h5 class="title">Contacts</h5>
					<ul>
						<li>Sofia, 1700, Bulgaria</li>
						<li>+359 5 62 36 54</li>
						<li>sales@simeon-art.com</li>
					</ul>
				</div>
				<!--/.First column-->

				<hr class="hidden-md-up">

				<!--Second column-->
				<div class="col-md-3">
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
				<div class="col-md-3">
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
				<div class="col-md-3">
					<h5 class="title">Social Media</h5>
					<ul>
						<li>
							<a href="#!">
								<i class="fa fa-facebook fa-2x"></i>
							</a>

							<a href="#!" class="pl-3">
								<i class="fa fa-youtube fa-2x"></i>
							</a>
						</li>
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
</body>
</html>
