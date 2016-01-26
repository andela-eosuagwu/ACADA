<!DOCTYPE html>
<html>
    <head>
        @include('app.includes.sections.head')
    </head>

    <body>

    	@include('app.includes.sections.top_nav')

    	<div class="row">
      		<div class="col s12 m12 l9 section-container">
    			@yield('content')
      		</div>
    	</div>

        @include('app.includes.sections.script')
	</body>
</html>