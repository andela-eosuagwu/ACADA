@extends('app.master')

@section('title', 'This is SuyaBay #TISb')

@endsection

@section('content')


	<div class="living_middle">
		<div class="container">
			<div class="entertain_box wow fadeInLeft" data-wow-delay="0.4s">
				@foreach ($categorys as $category)
					<div class="col-md-3 grid_box">
					    <a href="{{$category->category}}/{{$category->id}}" class="swipebox"  title="Image Title"> 
					        <img src="{{ asset('res/images/p1.jpg') }}" class="img-responsive" alt="">
					        <span class="zoom-icon"></span> 
					    </a>
					    <div class="grid_box2">
					        <h6><a href="#">{{$category->title}}</a></h4>
					    </div>
					</div>
				@endforeach         
				<div class="clearfix"> </div>
			</div> 
		</div>
	</div>

	<!-- a
	| include offering section to home page
	| @location includes/sections/offering.blade.php
	 -->
    @include('app.includes.sections.offering')

@endsection


