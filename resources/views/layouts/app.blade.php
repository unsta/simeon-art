<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Simeon Art - @yield('title')</title>

	@include('layouts.styles')
</head>
<body>
	@include('layouts.navbar')
	
	@yield('carousel')

	<main>
		<div class="container">
			@yield('content')
		</div>
	</main>

	@include('layouts.footer')

	<div class="hiddendiv common"></div>

	@yield('javascript')
</body>
</html>
