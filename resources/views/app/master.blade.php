<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="{{ asset('res/css/bootstrap.css')  }}" rel='stylesheet' type='text/css' />        
        <link href="{{ asset('res/css/style.css')  }}" rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script type="text/javascript" src="{{ asset('res/js/jquery-1.11.1.min.js')  }}"></script>
        <script type="text/javascript" src="{{ asset('res/js/login.js')  }}"></script>
        <script src="{{ asset('res/js/jquery.easydropdown.js')  }}"></script>
        
        <!--Animation-->
        <script src="{{ asset('res/js/wow.min.js')  }}"></script>
        <link href="{{ asset('res/css/animate.css')  }}" rel='stylesheet' type='text/css' />
        <script> new WOW().init();</script>
    </head>
    <body>
        
        <!-- 
        | include top_nav section to master page
        | @location includes/sections/top_nav.blade.php
         -->
        @include('app.includes.sections.top_nav')
           
        <!-- 
        | apply and display the contents of a given section
         -->
        @yield('content')
        
        <!-- 
        | include footer section to master page
        | @location includes/sections/footer.blade.php
         -->
        @include('app.includes.sections.footer')
        
        <script src="{{ asset('res/js/classie.js')  }}"></script>
        <script src="{{ asset('res/js/uisearch.js')  }}"></script>
        <script> new UISearch( document.getElementById( 'sb-search' ) ); </script>
        <script type="text/javascript" src="{{ asset('res/js/responsive-nav.js') }}"></script>
    </body>
</html>
