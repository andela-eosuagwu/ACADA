@extends('app.master')

@section('title', 'Welcome to ACADA')

@section('content')

    <section class="section">
   		<h1 class="tag font-2 ">{{$data['title']}} Videos </h1>
   		<div class="line"></div>

   			<section class="section">
		    	<div class="row">

		    		@if( $data['categories']->count() == 0)
		    		    <h1 class="font-1 center" style="color:#26a69a;">Result not found</h1>
		    		    <a href="/" style="color:#000">
		    		    	<h5 class="center-align font-2">Click here to upload <span style="color:#26a69a;">{{$data['title']}}</span> videos</h5>
		    		    </a>
		    		@else
			    		@foreach( $data['categories'] as $video )
			    		@include('app.includes.sections.video_list')
						@endforeach
		    		@endif

		    	</div>
		    </section>


    </section>


@endsection