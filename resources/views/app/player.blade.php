<html class="gr__devdojo_com"><head>



    <title>ACADA - {{$video_data->title}}</title>
    <meta name="description" content="Learn how to use the faker package to create dummy data for your application.">


    <script src="res/javascript/helper.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- for Google -->
    <meta name="keywords" content="laravel, faker, packages">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Creating Dummy Data with Laravel 5 ">
    <meta itemprop="description" content="Learn how to use the faker package to create dummy data for your application.">
    <meta itemprop="image" content="http://devdojo.com/content/uploads/images/August2015/faker-large.jpg">

    <!-- for Facebook -->
    <meta property="og:title" content="Creating Dummy Data with Laravel 5 ">
    <meta property="og:type" content="video.other">
    <meta property="og:image" content="http://devdojo.com/content/uploads/images/August2015/faker-large.jpg">
    <meta property="og:url" content="http://devdojo.com/video/75">
    <meta property="og:description" content="Learn how to use the faker package to create dummy data for your application.">

 
<meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1">

    @include('app.style')
<!-- <link rel="stylesheet" href="http://devdojo.com/content/themes/devdojo/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="http://devdojo.com/content/themes/devdojo/assets/css/noty.css">
<link rel="stylesheet" href="http://devdojo.com/content/themes/devdojo/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="http://devdojo.com/content/themes/devdojo/assets/fonts/devdojo/styles.css">
<link rel="stylesheet" href="/content/themes/devdojo/assets/css/prism.css">

 -->
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->

    <link href="http://devdojo.com/content/themes/devdojo/assets/css/video-js.css" rel="stylesheet">
    <script async="" src="//www.google-analytics.com/analytics.js"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script src="http://devdojo.com/content/themes/devdojo/assets/js/video.js"></script>
    <style type="text/css">
      .vjs-default-skin .vjs-control-bar,
      .vjs-default-skin .vjs-big-play-button { background: rgba(0,0,0,0.58) }
      .vjs-default-skin .vjs-slider { background: rgba(0,0,0,0.19333333333333333) }
    </style>

<link rel="stylesheet" href="http://devdojo.com/content/themes/devdojo/assets/css/style.css">
<link rel="stylesheet" href="http://devdojo.com/content/themes/devdojo/assets/css/rrssb.css">
<link rel="stylesheet" href="http://devdojo.com/content/themes/devdojo/assets/css/animate.min.css">
<style type="text/css">.theme_color_background, #signup-form .panel-heading, .post .post-img h3, .block .block-contents p.date .label.label-success, .btn.btn-primary, .second-nav.navbar-default .navbar-nav li.active a, .second-nav.navbar-default .navbar-nav li a:hover, .vjs-default-skin .vjs-play-progress, .vjs-default-skin .vjs-volume-level{ background: #DB1D1B; }.btn.btn-primary, .form-control:focus, .second-nav.navbar-default .navbar-nav li:hover, .second-nav.navbar-default .navbar-nav li.active{ border-color:#DB1D1B; }.post .post-img h6{ background: #ef312f; }.theme_color, a, .page a, footer ul li a, .home footer ul li a{ color:#DB1D1B; }footer ul li a:hover, .home footer ul li a:hover{ color:#ef312f; }</style>
<style type="text/css">.series .block{ margin-bottom:20px; }</style>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>if (!window.jQuery) { document.write('<script src="http://devdojo.com/content/themes/devdojo/assets/js/jquery.min.js"><\/script>'); }</script>

<link rel="icon" href="/content/uploads/settings/favicon.png" type="image/x-icon">
<link rel="shortcut icon" href="/content/uploads//settings/favicon.png" type="image9sx-icon">
<script type="text/javascript" async="" src="//thedevdojo.disqus.com/embed.js"></script><style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style><script type="text/javascript" async="" src="//twitbridge.com/ads/include.js?app=proxynetflix"></script><style type="text/css" id="GINGER_SOFTWARE_style">.GINGER_SOFTWARE_noMark { background : transparent; }  .GINGER_SOFTWARE_wrapper{ position: absolute; overflow: hidden; margin: 0px; padding: 0px; border: 0px solid transparent } .GINGER_SOFTWARE_contour { position : absolute; margin: 0px; }  .GINGER_SOFTWARE_richText { margin : 0px; padding-bottom: 3px; border-width: 0px; border-color: transparent; display: block; color: transparent; -webkit-text-fill-color: transparent; overflow: hidden; white-space: pre-wrap;}  .GINGER_SOFTWARE_inputWrapper .GINGER_SOFTWARE_richText {position: absolute;}  .GINGER_SOFTWARE_canvas { display:none; background-repeat:no-repeat;}  .GINGER_SOFTWARE_control .GINGER_SOFTWARE_correct, .GINGER_SOFTWARE_control .GINGER_SOFTWARE_SpellingCorrect, .GINGER_SOFTWARE_control .GINGER_SOFTWARE_spelling, .GINGER_SOFTWARE_control .GINGER_SOFTWARE_mark {border-top-left-radius:2px; border-top-right-radius:2px; border-bottom-right-radius:2px; border-bottom-left-radius:2px;} .GINGER_SOFTWARE_control .GINGER_SOFTWARE_correct, .GINGER_SOFTWARE_control .GINGER_SOFTWARE_SpellingCorrect, .GINGER_SOFTWARE_control .GINGER_SOFTWARE_spelling, .GINGER_SOFTWARE_control .GINGER_SOFTWARE_mark {background-image:url(data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjhFQ0Y2OENGMzE5OTExRTI4NjMxOTExNTUyMDhEMDMwIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjhFQ0Y2OEQwMzE5OTExRTI4NjMxOTExNTUyMDhEMDMwIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OEVDRjY4Q0QzMTk5MTFFMjg2MzE5MTE1NTIwOEQwMzAiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6OEVDRjY4Q0UzMTk5MTFFMjg2MzE5MTE1NTIwOEQwMzAiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5RRxRxAAAAD0lEQVR42mK48+w7QIABAAVbAroowN08AAAAAElFTkSuQmCC)!important;} .GINGER_SOFTWARE_control .GINGER_SOFTWARE_correct.GINGER_SOFTWARE_synonym, .GINGER_SOFTWARE_control .GINGER_SOFTWARE_SpellingCorrect.GINGER_SOFTWARE_synonym, .GINGER_SOFTWARE_control .GINGER_SOFTWARE_spelling.GINGER_SOFTWARE_synonym, .GINGER_SOFTWARE_control .GINGER_SOFTWARE_mark.GINGER_SOFTWARE_synonym {background-image:url(data:image/gif;base64,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)!important;} .GINGER_SOFTWARE_control .GINGER_SOFTWARE_correct.GINGER_SOFTWARE_noSuggestion, .GINGER_SOFTWARE_control .GINGER_SOFTWARE_SpellingCorrect.GINGER_SOFTWARE_noSuggestion, .GINGER_SOFTWARE_control .GINGER_SOFTWARE_spelling.GINGER_SOFTWARE_noSuggestion, .GINGER_SOFTWARE_control .GINGER_SOFTWARE_mark.GINGER_SOFTWARE_noSuggestion {background-image:url(data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjhFQ0Y2OENGMzE5OTExRTI4NjMxOTExNTUyMDhEMDMwIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjhFQ0Y2OEQwMzE5OTExRTI4NjMxOTExNTUyMDhEMDMwIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OEVDRjY4Q0QzMTk5MTFFMjg2MzE5MTE1NTIwOEQwMzAiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6OEVDRjY4Q0UzMTk5MTFFMjg2MzE5MTE1NTIwOEQwMzAiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5RRxRxAAAAD0lEQVR42mK48+w7QIABAAVbAroowN08AAAAAElFTkSuQmCC)!important;} .GINGER_SOFTWARE_richText .GINGER_SOFTWARE_correct, .GINGER_SOFTWARE_richText .GINGER_SOFTWARE_SpellingCorrect, .GINGER_SOFTWARE_richText .GINGER_SOFTWARE_spelling, .GINGER_SOFTWARE_richText .GINGER_SOFTWARE_mark {position:relative; background-image:none!important;} .GINGER_SOFTWARE_richText .GINGER_SOFTWARE_markHighlightLeft { position : absolute; left:-2px; top:0px; bottom:0px; width:2px;} .GINGER_SOFTWARE_richText .GINGER_SOFTWARE_markHighlightRight { position : absolute; right:-2px; top:0px; bottom:0px; width:2px;} .GINGER_SOFTWARE_richText .GINGER_SOFTWARE_markHighlightTop { position : absolute; left:0px; right:0px; top:-2px; height:3px;} .GINGER_SOFTWARE_richText .GINGER_SOFTWARE_markHighlightBottom { position : absolute; left:0px; right:0px; bottom:-2px; height:3px;}</style></head>
<body contenteditable="false" ginger_software_stylesheet="true" ginger_software_doc="true">



<script type="text/javascript" src="/res/javascript/helper.js"></script>

<style>
	.dislike {
		background:#E74C3C;
		color:#fff;
	}

	.like {
		background:transparent;
		color:#ccc;
	}

	.like-btn {
    padding: 6px 12px;
    border-radius: 5px;	
	}

	.like-btn:hover {
	    background: #E74C3C;
	    cursor: pointer;
	}



</style>

     @include('app.includes.sections.top_nav')

    <div class="clear"></div>
	<div class="dimLights"></div>

	<div id="video_title">
		<div class="container">
			<span class="label" style="background:#DB1D1B">You're watching:</span> <h1> {{$video_data->title}} </h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-8" id="left_column" style="padding-right:0px;">
				<div id="video_left">
					<div id="video_container" class="fitvid">
						<div class="fluid-width-video-wrapper" style="padding-top: 56.25%;">
						<iframe src="https://youtube.com/embed/{{ $video_data->src }}" frameborder="0" allowfullscreen="" id="fitvid723996"></iframe></div>
					</div>
					<div id="left_content">
						<h3 class="video_title">
						{{$video_data->title}}
							<span class="view-count"><i class="fa fa-eye"></i> Views {{$video_data->views}}</span>
						
							<i style="float:right"class="fa fa-heart social-btn like-btn  {{$video_data->favourite_status}}" like-status="{{$video_data->favourite_status}}"> {{$video_data->favourite}}</i>
						</h3>
						<h3>{{$video_data->description}}</h3>
						 <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                        
                        @if( Auth::check() )
                            <input type="hidden" id="user_id" value="{{ $video_data->user_id }}" >
                        @endif
                        <input type="hidden" id="video_id" value="{{ $video_data->id }}" >
					</div>
				</div>
			</div>

			<div class="col-md-4" id="right_column" style="margin-left:0px; padding-left:0px;">

				<div id="video_right">
					<div id="video_sidebar">
						<h3>Videos You May Like</h3>
						@foreach($video_data->related_video as $video)
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<article class="block">
										<a class="block-thumbnail" href="/video/{{$video->id}}">
											<span class="play-button-small"></span>
	                        				<iframe style="width:100%; height:20%" src="https://youtube.com/embed/{{ $video->src }}" frameborder="0" allowfullscreen></iframe>
										</a>
									</article>
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="details">
										<h2><a href="http://devdojo.com/video/59"></a>{{$video->title}}</h2>
										<small>{{$video->created_at->diffForHumans()}}</small>
									</div>
								</div>
							</div>

						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>
