<header>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
		<div class="container">
			<a href="{{ url('/') }}" class="navbar-brand">
				<img src="css/images/logo.png" width="80" alt="Simeon Art"/>
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a href="{{ url('/') }}" class="nav-link waves-effect waves-light">Home <span class="sr-only">(current)</span></a>
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
						<a href="https://www.facebook.com/simeonart1/" target="_blank" class="nav-link waves-effect waves-light">
							<i class="fa fa-facebook fa-15x"></i>
						</a>
					</li>

					<li class="nav-item">
						<a href="https://www.youtube.com/channel/UCsH7qdS62MQtsm7uhYTboFg/videos" target="_blank" class="nav-link waves-effect waves-light">
							<i class="fa fa-youtube fa-15x"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
