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
      <ul class="nav navbar-nav" style="margin-top:3px;">
        <li class="activ"><a href="/">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/video/create">Add Video</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right" style="margin-top:3px; color:gray">
      
        @if( ! Auth::check() )
          <li ><a href="/auth/login">Login</a></li>
          <li><a href="/auth/register">Register</a></li>
        @endif

        @if( Auth::check() )
              <li><a href="/user">{{Auth::user()->username}}</a></li>
              <li><a href="/auth/logout">logout</a></li>
          @endif   

      </ul>
    </div><!-- /.navbar-collapse -->


  </div><!-- /.container-fluid -->
</nav>

