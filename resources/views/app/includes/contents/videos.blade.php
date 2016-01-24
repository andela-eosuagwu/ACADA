
<div class="col s12  m12 l9">
	<div class="row">
		<br>
		<div class="col s12 l12 tab-container">
			<ul class="tabs">
				<li class="tab col s12"><a href="#test1" class="active">Uploaded Videos</a></li>
				<li class="tab col s12"><a href="#test2">Favourite</a></li>
				<li class="tab col s12"><a href="#test3">Recent View</a></li>
			</ul>
		</div>

		<div id="test1" class="col s12 tab-content">
    		@include('app.includes.sections.video_list')
		</div>

		<div id="test2" class="col s12 tab-content">
    		@include('app.includes.sections.video_list')
		</div>

		<div id="test3" class="col s12 tab-content">
    		@include('app.includes.sections.video_list')
		</div>
	</div>
</div>