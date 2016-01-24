@extends('app.master')

@section('title', 'Welcome to ACADA')

@section('content')

    @include('app.includes.sections.banner')

    <section class="section">
   		<h1 class="tag font-2 ">Javascript Videos </h1>
   		<div class="line"></div>
    </section>

    @include('app.includes.sections.video_list')

    @include('app.includes.sections.subscribe')

@endsection