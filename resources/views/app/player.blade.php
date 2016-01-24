@extends('app.master')

@section('title', 'Welcome to ACADA')

@section('content')
	<section class="section" ng-controller="videoController">

	<div class="row">

    	<div class="col s12 m12 l8 video-controller">
    		<h6 class="title">
    			How to install php on ubuntu
    			<span class="right">2day ago</span>
    		</h6>

	    	<div class="video-container">
	        	<iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
	      	</div>
	      	<div class="action">
	      		<a class=" waves-effect waves-light btn" ng-click="likeVideo()"><i class="fa fa-thumbs-o-up"></i> Like</a>
	      		<a class="waves-effect waves-light btn" ng-click="shareVideo()"><i class="fa fa-share-alt-square"></i> Share</a>
	      		<a class="waves-effect waves-light btn" ng-click="favoriteVideo()"><i class="fa fa-play-circle"></i> Favorite</a>
	      	</div>
    	</div>








		<div class="col s4 hide-on-med-and-down">
			<div class="col s12 m8 l12">

				<h6>Related Videos</h6>

				<div class="lighten-5 z-depth-1">
					<div class="row valign-wrapper">
						<div class="col s4">
							<img src="{{ asset('res/images/java.png') }}" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
						</div>
						<div class="col s10">
							<span class="black-text">
								How to install php grksertgr trkgjhrt
							</span>
						</div>
					</div>
				</div>
				<div class="lighten-5 z-depth-1">
					<div class="row valign-wrapper">
						<div class="col s4">
							<img src="{{ asset('res/images/java.png') }}" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
						</div>
						<div class="col s10">
							<span class="black-text">
								How to install php grksertgr trkgjhrt
							</span>
						</div>
					</div>
				</div>

			</div>
		</div>
    </div>

	</section>
@endsection