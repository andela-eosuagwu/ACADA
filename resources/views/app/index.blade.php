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
				<div class="col s12 m3 l3 recent-video">

					<div class="card">

						<a class='dropdown-button btn-floating btn' href='#' data-activates='video-action{{$video->id}}'><i class="material-icons">add</i></a>

						<!-- Dropdown Structure -->
						<ul id="video-action{{$video->id}}" class='dropdown-content'>

						    <input
						    	class="hidden_input"
						    	hidden="true"
						    	token="{{ csrf_token() }}"
						    	user_id=1
						    	video_id=1
						    >

							<li><a href="#" class="video_like_action" >Like</a></li>
							<li><a href="#!">Share</a></li>
							<li><a href="#!" >favorite</a></li>
							<li class="divider"></li>
							<li><a href="#!" class="video_delete_action">Delete</a></li>


						</ul>

						<div class="image-container card-image waves-effect waves-block waves-light">
							<img class="activator responsive-img" src="{{ asset('res/images/java.png') }}">
						</div>

						<div class="card-content video-title">
							<span class="card-title truncate activator grey-text text-darken-4">
								{{$video->title}}
							</span>
							<p class="play-video-link">
								<a href="/player" class="waves-effect waves-light btn">Play Video</a>
							</p>
							<ul class="status-icon">
								<li class="{{$video->like_status}}">
									<i class="fa fa-eye"></i>
									10
								</li>
								<li>
									<i class="fa fa-thumbs-up"></i>
									 10
								</li>

								<li>
									<i class="fa fa-heart"></i>
									 10
								</li>

								<li>
									<i class="fa fa-gratipay"></i>
									 10
								</li>
							</ul>
						</div>
					</div>
				</div>
			@endforeach
    	</div>
    </section>









    @include('app.includes.sections.subscribe')

@endsection