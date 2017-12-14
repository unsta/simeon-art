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
