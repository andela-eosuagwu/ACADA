@extends('app.master')

@section('title', 'ACADA')

@endsection

@section('content')


    <div class="container">
        <div class="top_grid">
            <br><br><br><br>

            @if( sizeof($categories) == 0)
                <center>
                    <h1>No records found for this category</h1>
                    <a href="/"><p>Click here to start here over</p></a>
                </center>
                <br>
            @endif

            @foreach( $categories as $video )
            
            <div class="col-md-3 margin-1" >
                <div class="grid1">
                    <div class="view view-first">
                        <div class="index_img1">
                            <center>
                                <img src="../../res/images/{{$video->categories}}.png" class="img-responsive" alt="">
                            </center>
                        </div>
                    </div> 

                    <div class="inner_wrap">
                        <a href="/video/{{$video->categories}}/{{$video->id}}"> 
                            <h3>{{$video->title}}</h3>    
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="clearfix"> </div>
        </div>
    </div>

	<!--
	| include offering section to home page
	| @location includes/sections/offering.blade.php
	 -->
    @include('app.includes.sections.offering')

@endsection


