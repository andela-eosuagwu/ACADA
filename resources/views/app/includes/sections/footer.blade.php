    <footer>
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                                        <a href="/" class="logo"><img src="/res/images/logo.png"></a>
                    <p>    </p>
                    <a href="http://facebook.com/" class="facebook social-link"><i class="fa fa-facebook"></i></a>
                    <a href="http://twitter.com/" class="twitter social-link"><i class="fa fa-twitter"></i></a>
                    <a href="http://plus.google.com/" class="google social-link"><i class="fa fa-google-plus"></i></a>
                    <a href="http://youtube.com/" class="youtube social-link"><i class="fa fa-youtube"></i></a>
                    <div class="clear"></div>
                </div>
                <div class="col-md-3">
                    <h4>Video Categories</h4>
                    <ul>
                                                    <li><a href="/video/category/html">HTML</a></li>
                                                    <li><a href="/video/category/css">CSS</a></li>
                                                    <li><a href="/video/category/javascript">Javascript</a></li>
                                                    <li><a href="/video/category/php">PHP</a></li>
                                            </ul>
                </div>
                <div class="col-md-2">
                    <h4>Links</h4>
                    <ul>

                        <li><a href="/">Home</a></li>
                        <li><a href="auth/login">Login</a></li>
                        <li><a href="/auth/register">Signup</a></li>
                    </ul>
                </div>
            </div>

            <hr>
            <p class="copyright">Copyright © 2016 ACADA</p>

        </div>
    </footer>







    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">




        <script src="http://devdojo.com/content/themes/devdojo/assets/js/headroom.min.js"></script>
    <script src="http://devdojo.com/content/themes/devdojo/assets/js/bootstrap.min.js"></script>
    <script src="http://devdojo.com/content/themes/devdojo/assets/js/moment.min.js"></script>
    <script type="text/javascript" src="http://devdojo.com/content/themes/devdojo/assets/js/noty/jquery.noty.js"></script>
    <script type="text/javascript" src="http://devdojo.com/content/themes/devdojo/assets/js/noty/themes/default.js"></script>
    <script type="text/javascript" src="http://devdojo.com/content/themes/devdojo/assets/js/noty/layouts/top.js"></script>

    <script type="text/javascript">

    //********** Headroom js functionality **********/
        // grab an element
        var myElement = document.querySelector(".navbar");
        // construct an instance of Headroom, passing the element
        var headroom  = new Headroom(myElement, { offset: 65 });
        // initialise
        headroom.init();


      $('document').ready(function(){


            $('.dropdown').hover(function(){
                $(this).addClass('open');
            }, function(){
                $(this).removeClass('open');
            });


        $('#nav-toggle').click(function(){
            $(this).toggleClass('active');
            $('.navbar-collapse').toggle();
            $('body').toggleClass('nav-open');
        });

        $('#mobile-subnav').click(function(){
            if($('.second-nav .navbar-left').css('display') == 'block'){
                $('.second-nav .navbar-left').slideUp(function(){
                    $(this).addClass('not-visible');
                });
                $(this).html('<i class="fa fa-bars"></i> Open Submenu');
            } else {
                $('.second-nav .navbar-left').slideDown(function(){
                    $(this).removeClass('not-visible');
                });
                $(this).html('<i class="fa fa-close"></i> Close Submenu');
            }

        });

      });


      /********** LOGIN MODAL FUNCTIONALITY **********/

      var loginSignupModal = $('<div class="modal fade animated bounceInDown" id="loginSignupModal" tabindex="-1" role="dialog" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal"><i class="dojo-close-delete"></i><span class="sr-only">Close</span></button><h4 class="modal-title" id="myModalLabel">Login Below</h4></div><div class="modal-body"></div></div></div></div>');

        $(document).ready(function(){

            // Load the Modal Window for login signup when they are clicked
            $('.login-desktop a').click(function(e){
                e.preventDefault();
                $('body').prepend(loginSignupModal);
                $('#loginSignupModal .modal-body').load($(this).attr('href') + '?redirect=' + document.URL + ' .form-signin', function(){
                    $('#loginSignupModal').show(200, function(){
                        setTimeout(function() { $('#email').focus() }, 300);


                    });
                    $('#loginSignupModal').modal();

                });

                // Be sure to remove the modal from the DOM after it is closed
                $('#loginSignupModal').on('hidden.bs.modal', function (e) {
                    $('#loginSignupModal').remove();
                });

            });




        });

        /********** END LOGIN MODAL FUNCTIONALITY **********/

    </script>

          <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-62970618-1', 'auto');
        ga('send', 'pageview');
      </script>

    <script></script>


<iframe width="0" height="0" frameborder="0" src="about:blank" id="GINGER_SOFTWARE_bubblesIFrame" scrolling="no" style="border: 0px solid; display: none; position: absolute; z-index: 2147483647; height: 0px; width: 0px; background-color: transparent;"></iframe><div id="GingerWidgetInfo" style="display:none;">{"version":"0.1.0.585","isExtension":true,"extensionName":"Chrome"}</div></body><span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span></html>


