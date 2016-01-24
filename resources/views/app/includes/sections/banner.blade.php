<section class="section banner" ng-controller="searchController">

	<h1 class="font-1" style="color:#26a69a;">ACADA</h1>
	<p class="font-2">Learn how to easily start using Materialize in your website.</p>


	<div class="input-field col s12">
		<label for="search" data-error="wrong" data-success="right">Search by Title or Category </label>
		<input id="search" type="text" class="validate">
	</div>

	<button class="btn waves-effect waves-light" type="submit" ng-click="search()">Search</button>

</section>