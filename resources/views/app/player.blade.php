@extends('app.master')

@section('title', 'Welcome to ACADA')

@section('content')
	<section class="section" ng-controller="videoController">

	<div class="row">

    	<div class="col s12 m12 l8 video-controller">
    		<h6 class="title">
    			{{$data['video']->title}}
    			<span class="right">{{$data['video']->created_at->diffForHumans()	}}</span>
    		</h6>

	    	<div class="video-container">
	        	<iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
	      	</div>
	      	<p class="truncate">{{$data['video']->description}}</p>
	      	<div class="action">

	      		<a
	      			href="/video/{{$data['video']->like_status}}/{{$data['video']->id}}/1"
	      			class="waves-effect waves-light btn {{$data['video']->like_status}}">
	      			<i class="fa fa-thumbs-o-up"></i> Like {{$data['video']->likes}}
	      			</a>


	      		<a
	      			href="/video/{{$data['video']->favourite_status}}/{{$data['video']->id}}/1"
	      			class="waves-effect waves-light btn"><i class="fa fa-heart"></i> Favourite {{$data['video']->favourite}}</a>


	      		<a class="waves-effect waves-light btn"><i class="fa fa-play-circle"></i> View {{$data['video']->view}}</a>
	      	</div>
    	</div>







			<div class="col s4 hide-on-med-and-down">
				<div class="col s12 m8 l12">

					<h6>Related Videos</h6>

    			@foreach($data['related_video'] as $related )
					<a href="/video/{{$related->id}}">
					<div class="lighten-5 z-depth-1">
						<div class="row valign-wrapper">
							<div class="col s4">
								<img src="../res/images/{{$related->categories}}.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
							</div>
							<div class="col s10">
								<h6 class="truncate">{{$related->title}}</h6>
								<span class="black-text">
									{{$related->description}}
								</span>
							</div>
						</div>
					</div>
					</a>
				@endforeach

				</div>
			</div>
    </div>

	</section>
@endsection