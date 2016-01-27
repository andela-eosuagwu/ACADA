    <nav class="navbar navbar-default navbar-static-top headroom headroom--not-top headroom--pinned" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a id="nav-toggle" href="#"><span></span></a>
                <a href="/" class="navbar-brand">
                    <img src="/res/images/logo.png">
                </a>
            </div>
            <div class="collapse navbar-collapse right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="active">
                        <a href="/">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle">Categories</a>
                        <ul class="dropdown-menu multi-level" role="menu">
                            <li><a href="/video/category/php">Php</a></li>
                            <li><a href="/video/category/java">Java</a></li>
                            <li><a href="/video/category/node">Node Js</a></li>
                            <li><a href="/video/category/javascript">Javascript</a></li>
                        </ul>
                    </li>
                    <li><a href="/video/create">Upload Video</a></li>
                </ul>
                @if(Auth::check() )
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#_" class="user-link-desktop dropdown-toggle" data-toggle="dropdown">
                                
                                @if(Auth::user()->avatar = '' || Auth::user()->id = null)
                                hjvrgr
                                @endif

                                <img src="/res/images/default.jpg" class="img-circle"> 

                                {{ Auth::user()->username }}
                                <i class="fa fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/user">My Profile</a></li>
                                <li><a href="/user/favourite">My Favorites</a></li>
                                <li class="divider"></li>
                                <li><a href="/auth/logout" id="user_logout_mobile"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                @endif

                @if( ! Auth::check() )
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="/auth/login"><i class="fa fa-lock"></i> Login</a></li>
                    <li class=""><a href="/auth/register"><i class="fa fa-user"></i> Signup</a></li>
                </ul>
                @endif
            
            </div>
        </div>
    </nav>











    <link rel="stylesheet" href="http://devdojo.com/content/themes/devdojo/assets/css/pgwslider.min.css">

    <!-- basic stylesheet -->
    <link rel="stylesheet" href="http://devdojo.com/content/themes/devdojo/assets/js/royalslider/royalslider.css">

    <!-- skin stylesheet (change it if you use another) -->
    <link rel="stylesheet" href="http://devdojo.com/content/themes/devdojo/assets/js/royalslider/skins/default/rs-default.css">

    <!-- Main slider JS script file -->
    <!-- Create it with slider online build tool for better performance. -->
    <script src="http://devdojo.com/content/themes/devdojo/assets/js/royalslider/jquery.royalslider.min.js"></script>
    <style type="text/css">
        .rsDefault .rsBullets{
            height:30px;
            background:none;
        }
        .rsDefault .rsBullet{
            padding:6px 6px 6px;
            cursor:pointer;
        }
    </style>
