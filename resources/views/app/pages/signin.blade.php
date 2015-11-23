@extends('app.master')

@section('title', 'ACADA')

@endsection

@section('content')
	
	<!-- 
	| include main content to login
	| @location includes/contents/signin.blade.php
	 -->
    @include('app.includes.contents.signin')

	<!-- 
	| include offering section to home page
	| @location includes/sections/offering.blade.php
	 -->
    @include('app.includes.sections.offering')

@endsection


