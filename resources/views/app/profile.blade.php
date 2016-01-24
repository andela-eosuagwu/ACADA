@extends('app.dashboard_master')

@section('title', 'Emeka')

@section('content')
	<div class="row">

		@include('app.includes.sections.dashboard_side_bar')

		@include('app.includes.contents.profile')

@endsection