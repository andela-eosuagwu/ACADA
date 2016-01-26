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

			<li><a href="/vide	o/like/1/1" class="" >Like</a></li>
			<li><a href="#!">Share</a></li>
			<li><a href="/video/favourite/1/1" >favourite</a></li>
			<li class="divider"></li>
			<li><a href="#!" class="video_delete_action">Delete</a></li>


		</ul>

		<div class="image-container card-image waves-effect waves-block waves-light">
			<img class="activator responsive-img" src="{{ asset('res/images/java.png') }}">
		</div>

		<div class="card-content video-title">
			<span class="card-title truncate activator grey-text text-darken-4">

			</span>
			<p class="play-video-link">
				<a href="/video/{{$video->id}}" class="waves-effect waves-light btn">Play Video</a>
			</p>
			<ul class="status-icon">
				<li class="">
					<i class="fa fa-eye"></i>
					{{$video->views}}
				</li>
				<li>
					<i class="fa fa-thumbs-up"></i>
					{{$video->likes}}
				</li>

				<li>
					<i class="fa fa-heart"></i>
					{{$video->favourite}}
				</li>
			</ul>
		</div>
	</div>
</div>