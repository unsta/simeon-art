@extends('layouts.app')

@section('title', 'Products')

@section('content')
	@include('layouts.products.filters')

	@include('layouts.products.products')
@endsection

@section('javascript')
	@parent

	<script>
		$(document).ready(function() {
			$('.mdb-select').material_select();
		});
	</script>
@endsection
