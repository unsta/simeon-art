@extends('layouts.app')

@section('title', 'Home')

@section('carousel')
	@include('layouts.carousel')
@endsection

@section('content')
	@include('layouts.sections.products')

	<hr />

	@include('layouts.sections.categories')
@endsection

@section('javascript')
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
	<!-- <script src="js/app.js"></script> -->
	<script src="js/compiled.min.js"></script>
@endsection
