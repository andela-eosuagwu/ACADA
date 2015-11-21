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

<div class="header">
    <div class="col-sm-8 header-left">
        
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
                <li><a href="/create">Add Video</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    
    <div class="col-sm-4 header_right">
        <div id="loginContainer">
            
            @if( ! Auth::check() )
            <a href="#" id="loginButton"><img src="{{ asset('res/images/login.png') }}"><span>Login</span></a>
            <div id="loginBox">                
                <form action="signin" method="get" id="loginForm">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <fieldset id="body">
                        <fieldset>
                            <label for="email">Username</label>
                            <input type="text" name="username" id="email">
                        </fieldset>
                        
                        <fieldset>
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </fieldset>

                        <input type="submit" id="login" value="Sign in">
                        <a href="/login/twitter"  id="login"></a>
                        <input type="submit" id="login" value="twitter">
                        <input type="submit" id="login" value="github">
                        
                    </fieldset>

                </form>
            </div>
            
            <a href="#" id="registerButton"><img src="{{ asset('res/images/login.png') }}"><span>Register</span></a>     
            <div id="registerBox" style="margin-left:">                
                <form action="signup" method="get" id="registerForm">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <fieldset id="body">
                        <fieldset>
                            <label for="email">Username</label>
                            <input type="text" name="username" id="email">
                        </fieldset>
                        
                        <fieldset>
                            <label for="password">Email</label>
                            <input type="email" name="email" id="password">
                        </fieldset>

                        <fieldset>
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </fieldset>

                        <input type="submit" id="register" value="Sign in">
                        <input type="submit" id="register" value="Sign in">
                        <input type="submit" id="register" value="Sign in">
                        <input type="submit" id="register" value="Sign in">
                        
                    </fieldset>
                    
                </form>
            </div>
            @endif
            
            @if( Auth::check() )
                <a href="#" id=""><img style = "width:50px; margin-top:-10px;"src="{{ asset('res/images/php.png') }}"><span>{{Auth::user()->username}}</span></a>     
                <a style ="margin-left:40px;" href="/logout" id=""><span>logout</span></a>     
            @endif
        </div>
        <div class="clearfix"></div>
    </div>




    <div class="clearfix"></div>
</div>