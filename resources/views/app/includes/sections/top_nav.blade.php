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
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>

        <!-- start search-->

        <div class="clearfix"></div>
    </div>

<!--     <div class="col-sm-4 header_right">
        <div id="loginContainer"><a href="#" id="loginButton"><img src="{{ asset('res/images/login.png') }}"><span>Login</span></a>
            <div id="loginBox">                
                <form action="signup" method="get" id="loginForm">
                    <fieldset id="body">
                        <fieldset>
                            <label for="email">Username</label>
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <input type="text" name="username" id="email">
                        </fieldset>
                        
                        <fieldset>
                            <label for="email">Email Address</label>
                            <input type="text" name="email" id="email">
                        </fieldset>
                        
                        <fieldset>
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </fieldset>

                        <input type="submit" id="login" value="Sign in">
                        <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                    </fieldset>
                    <span><a href="#">Forgot your password?</a></span>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div> -->

    
    <div class="col-sm-4 header_right">
        <div id="loginContainer"><a href="#" id="loginButton"><img src="{{ asset('res/images/login.png') }}"><span>Login</span></a>
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
                        <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                    </fieldset>
                    <span><a href="#">Forgot your password?</a></span>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="clearfix"></div>
</div>