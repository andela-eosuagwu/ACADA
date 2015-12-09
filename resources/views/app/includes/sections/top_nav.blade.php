<!-- 
 The file for the Arr class

 @author     Emeka Osuagwu <emekaosuagwuandela0@gmail.com>
 @copyright  2015 Emeka Osuagwu
 @license    MIT License <http://opensource.org/licenses/MIT>   

 @CodeFuntion: Header section houses.

 Logo
 Sign up
 Sign in
 Search bar
 Top navigation
 -->

<!-- <div class="header">
    <div class="col-sm-7 header-left">
        
        <div class="logo">
            <a href="/">
                <img src="{{ asset('res/images/logo.png') }}" alt=""/>
            </a>
        </div>
        
        <div class="menu">
            <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
            <ul class="nav" id="nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/video/create">Add Video</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    
    <div class="col-sm-5 header_right">
        <div id="loginContainer">
            
            @if( ! Auth::check() )
            <a href="/auth/login" id=""><img src="{{ asset('res/images/login.png') }}"><span>Login</span></a>
            <a href="/auth/register" id=""><img src="{{ asset('res/images/login.png') }}"><span>Register</span></a>     
            @endif
            

            @if( Auth::check() )
                @if( is_null(Auth::user()->avatar) || Auth::user()->avatar == '' )
                    <a href="/user" id=""><img style = "width:40px; margin-top:-14px;" src="{{ asset('res/images/profile.png') }}"><span>{{Auth::user()->username}}</span></a>     
                @endif
                @if( ! is_null(Auth::user()->avatar) || ! Auth::user()->avatar == '' )
                    <a href="/user" id=""><img style = "width:50px; margin-top:-10px;"src="{{ Auth::user()->avatar }}"><span>{{Auth::user()->username}}</span></a>     
                @endif

                <a style ="margin-left:40px;" href="/auth/logout" id=""><span>logout</span></a>     
            @endif
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="clearfix"></div>
</div> -->



<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"> <img style="width:100px; margin-top:-5px;" src="{{ asset('res/images/logo.png') }}" alt=""/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="activ"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Add Video</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right" style="margin-top:9px;">
      
        @if( ! Auth::check() )
          <li><a href="/auth/login">Login</a></li>
          <li><a href="/auth/register">Register</a></li>
        @endif

        @if( Auth::check() )
              <a href="/user" id=""><span>{{Auth::user()->username}}</span></a>     
              <a style ="margin-left:40px;" href="/auth/logout" id=""><span>logout</span></a>     
          @endif   

      </ul>
    </div><!-- /.navbar-collapse -->


  </div><!-- /.container-fluid -->
</nav>

