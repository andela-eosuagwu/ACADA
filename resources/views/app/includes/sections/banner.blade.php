<section class="section banner" ng-controller="searchController">

	<h1 class="font-1" style="color:#26a69a;">ACADA</h1>
	<p class="font-2">ACADA is an educational learning platform that allows developers share links of helpful videos..</p>

	<form action="/search" method="GET">
		<div class="input-field col s12">
			<label for="search" data-error="wrong" data-success="right">Search by Title or Category </label>
			<input name="title" id="search" type="text" class="validate">
		</div>
		<button class="btn waves-effect waves-light" type="submit" ng-click="search()">Search</button>
	</form>


</section>