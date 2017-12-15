@extends('layouts.app')

@section('title', 'Products')

@section('content')
	@include('layouts.products.filters')

	<hr />

	@include('layouts.home.categories')
@endsection

@section('javascript')
	@parent

	<script>
		$(document).ready(function() {
			$('.mdb-select').material_select();
		});
	</script>
@endsection
