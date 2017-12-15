@extends('layouts.app')

@section('title', 'Contacts')

@section('content')
	@include('layouts.contacts.contacts')
@endsection

@section('javascript')
	@parent

	<!-- Google Maps -->
	<script src="https://maps.google.com/maps/api/js"></script>
	<script src="js/init_map.js"></script>
@endsection
