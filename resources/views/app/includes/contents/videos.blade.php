
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

			<section class="section">
		    	<div class="row">

		    		@if($data['likes']->count() == 0)
		    		    <h1 class="font-1 center" style="color:#26a69a;">Result not found</h1>
		    		    <a href="/" style="color:#000">
		    		    	<h5 class="center-align font-2">Click here to upload a video</h5>
		    		    </a>
		    		@else

		    		@endif

		    	</div>
		    </section>


		</div>

		<div id="test2" class="col s12 tab-content">

			<section class="section">
		    	<div class="row">

		    		@if($data['likes']->count() == 0)
		    		    <h1 class="font-1 center" style="color:#26a69a;">Result not found</h1>
		    		    <a href="/" style="color:#000">
		    		    	<h5 class="center-align font-2">You'er yet to favorite any post</h5>
		    		    </a>
		    		@else

		    		@endif

		    	</div>
		    </section>
		</div>

		<div id="test3" class="col s12 tab-content">
			<section class="section">
		    	<div class="row">

		    		@if($data['likes']->count() == 0)
		    		    <h1 class="font-1 center" style="color:#26a69a;">Result not found</h1>
		    		    <a href="/" style="color:#000">
		    		    	<h5 class="center-align font-2">you'er yet to view something</h5>
		    		    </a>
		    		@else

		    		@endif

		    	</div>
		    </section>
		</div>
	</div>
</div>