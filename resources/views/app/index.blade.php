@extends('app.master')

@section('title', 'Welcome to ACADA')

@section('content')

    @include('app.includes.sections.banner')

    <section class="section">
   		<h1 class="tag font-2 ">Recent Upload </h1>
   		<div class="line"></div>
    </section>

    <section class="section">
    	<div class="row">
    		@if($video_data == null)
    			<h1 class="font-1 center" style="color:#26a69a;">Oops! no video here.</h1>
    		    <a href="/" style="color:#000">
    		    	<h5 class="center-align font-2">Be the first to upload a video :)</h5>
    		    </a>

    		@endif

    		@foreach($video_data as $video)
				@include('app.includes.sections.video_list')
			@endforeach
    	</div>
    </section>









    @include('app.includes.sections.footer')

@endsection