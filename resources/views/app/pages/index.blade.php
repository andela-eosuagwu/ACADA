@extends('app.master')

@section('title', 'ACADA')

@endsection

@section('content')
	
	<!-- 
	| include banner section to home page
	| @location includes/sections/banner.blade.php
	 -->
    
    @include('app.includes.sections.banner')
	 
	<!-- 
	| include main content to home page
	| @location includes/contents/main.blade.php
	 -->
    @include('app.includes.contents.main')

	<!-- 
	| include offering section to home page
	| @location includes/sections/offering.blade.php
	 -->
    @include('app.includes.sections.offering')

@endsection


