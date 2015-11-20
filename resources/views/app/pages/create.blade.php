@extends('app.master')

@section('title', 'ACADA')

@endsection

@section('content')

	<!-- 
	| include main content to home page
	| @location includes/contents/main.blade.php
	 -->
    @include('app.includes.contents.create')

	<!-- 
	| include offering section to home page
	| @location includes/sections/offering.blade.php
	 -->
    @include('app.includes.sections.offering')

@endsection


