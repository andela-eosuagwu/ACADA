<!DOCTYPE html>
<html>
    <head>
        @include('app.includes.sections.head')
    </head>

    <body>

    	@include('app.includes.sections.top_nav')

    			@yield('content')

        @include('app.includes.sections.script')
	</body>
</html>