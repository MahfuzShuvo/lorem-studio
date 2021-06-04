@extends('frontend.partials.master')

@section('content')
	<!-- header -->
	@include('frontend.partials.header')

	<!-- services -->
	@include('frontend.partials.services')

	<!-- portfolio -->
	{{-- @include('frontend.partials.portfolio') --}}
	<!-- trendy work -->
	@include('frontend.partials.trendy-work')

	<!-- testimonial -->
	@include('frontend.partials.testimonial')
@endsection