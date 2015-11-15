@extends('app.master')

@section('title', 'This is SuyaBay #TISb')

@endsection

@section('content')

	<!-- 
	| include main content to home page
	| @location includes/contents/main.blade.php
	 -->
    @include('app.includes.contents.category')

	<!-- 
	| include offering section to home page
	| @location includes/sections/offering.blade.php
	 -->
    @include('app.includes.sections.offering')

@endsection


