@extends('layouts.app')

@section('title', 'Contacts')

@section('content')
	@include('layouts.sections.contacts')
@endsection

@section('javascript')
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
	<!-- <script src="js/app.js"></script> -->
	<script src="js/compiled.min.js"></script>
	<!-- Google Maps -->
	<script src="https://maps.google.com/maps/api/js"></script>
	<script src="js/init_map.js"></script>
@endsection
