@extends('app.master')

@section('title', 'Welcome to ACADA')

@section('content')

    <section class="section">
   		<h1 class="tag font-2 ">Search Result</h1>
   		<div class="line"></div>

   			<section class="section">
		    	<div class="row">

				   	@if($data == null)
		    			<h1 class="font-1 center" style="color:#26a69a;">Record not found.</h1>
		    		    <a href="/" style="color:#000">
		    		    	<h5 class="center-align font-2">Try again :(</h5>
		    		    </a>
		    		@endif
			    	@foreach( $data as $video )
						@include('app.includes.sections.video_list')
			    	@endforeach
		    	</div>
		    </section>


    </section>


@endsection