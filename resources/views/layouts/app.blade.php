<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title') - Simeon Art</title>

	{{-- TODO: Combine compiled and style css files--}}
	<link href="css/compiled.min.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	@include('layouts.header')
	
	@yield('carousel')

	<main>
		<div class="container">
			@yield('content')
		</div>
	</main>

	@include('layouts.footer')

	@section('javascript')
		<script src="js/compiled.min.js"></script>
	@show
</body>
</html>
