@extends('app.master')

@section('title', 'ACADA')

@endsection

@section('content')


    <div class="container">
        <div class="top_grid">
            <br><br><br><br>

            @if( sizeof($categorys) == 0)
                <center>
                    <h1>You are yet to comtribute to ACADA</h1>
                    <a href="/create"><p>CLick here to post a video</p></a>
                </center>
                <br>
            @endif

            @foreach( $categorys as $video )
            
            <div class="col-md-3 margin-1" >
                <div class="grid1">
                    <div class="view view-first">
                        <div class="index_img1">
                            <center>
                                <img style ="width:200px;" src="../../res/images/{{$video->category}}.png" class="img-responsive" alt="">
                            </center>
                        </div>
                    </div> 

                    <div class="inner_wrap">
                        <a href="/video/{{$video->category}}/{{$video->id}}"> 
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


