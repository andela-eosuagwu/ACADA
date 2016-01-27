<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
	<article class="block">
		<a class="block-thumbnail" href="http://devdojo.com/video/82">
			<div class="thumbnail-overlay"></div>
			<span class="play-button"></span>
			<iframe style="width:100%; height:40%" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
			<div class="details">
				<h2>{{$video->title}}</h2>
				<span>{{$video->created_at->diffForHumans()}}</span>
			</div>
		</a>
		<div class="block-contents">
			<p class="date">{{$video->created_at->diffForHumans()}}
				<span class="label label-info">view {{$video->views}}</span>
			</p>
			<p class="desc">{{$video->description}}</p>
		</div>
	</article>
</div>