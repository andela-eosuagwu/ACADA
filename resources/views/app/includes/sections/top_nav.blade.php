<nav>
	<div class="nav-wrapper">
		<a href="#!" class="brand-logo">
			<img src="{{ asset('res/images/logo.png') }}">
		</a>
		<ul class="right hide-on-med-and-down">
			<li><a href="/">Home</a></li>
			<li><a class="modal-trigger" href="#uploadModal">Upload Video</a></li>
  			<li><a class="dropdown-button" href="#!" data-activates="categories-dropdown">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
			<li><a href="/auth/register" class="waves-effect waves-light btn">Register</a></li>
			<li><a href="/auth/login" class="waves-effect waves-light btn">Login</a></li>
			<li><a href="/user" class="waves-effect waves-light btn">Dashboard</a></li>
		</ul>
	</div>
</nav>

<ul id="categories-dropdown" class="dropdown-content">
	<li><a href="/video/category/php">PHP</a></li>
	<li><a href="/video/category/java">JAVA</a></li>
	<li><a href="/video/category/node">Node Js</a></li>
	<li><a href="/video/category/javascript">Javascript</a></li>
</ul>

@include('app.includes.sections.model')




