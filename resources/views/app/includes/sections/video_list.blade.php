<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
	<article class="block">
		<a class="block-thumbnail" href="/video/{{$video->id}}">
			<div class="thumbnail-overlay"></div>
			<span class="play-button"></span>
			<iframe style="width:100%; height:40%" src="https://youtube.com/embed/{{ $video->src }}" frameborder="0" allowfullscreen></iframe>
			<div class="details">
				<h2>{{$video->title}}</h2>
				<span>{{$video->created_at->diffForHumans()}}</span>
			</div>
		</a>
		<div class="block-contents" style="overflow: hidden;">
			<p class="date">{{$video->created_at->diffForHumans()}}
				<span class="label label-info">view {{$video->views}}</span>
			</p>
			<p class="desc">{{$video->description}}</p>
		</div>
	</article>
</div>