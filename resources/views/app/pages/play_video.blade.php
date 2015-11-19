@extends('app.master')

@section('title', 'This is SuyaBay #TISb')

@endsection

@section('content')
	
	<!-- 
	| include banner section to home page
	| @location includes/sections/banner.blade.php
	 -->
    @include('app.includes.sections.player')

	<!-- 
	| include main content to home page
	| @location includes/contents/main.blade.php
	 -->
    @include('app.includes.sections.feature')

	<!-- 
	| include offering section to home page
	| @location includes/sections/offering.blade.php
	 -->
    @include('app.includes.sections.offering')

@endsection


