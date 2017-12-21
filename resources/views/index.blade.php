@extends('layouts.app')

@section('title', 'Home')

@section('carousel')
	@include('layouts.home.carousel')
@endsection

@section('content')
	@include('layouts.home.new_products')

	@include('layouts.home.categories')
@endsection
