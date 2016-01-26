    <div class="container">

        <div id="home-content">


            <div class="row series" style="margin-bottom:30px; margin-top:0px;">
                <div class="col-md-12">
                    <h3><a href="/shows"><i class="dojo-lessons"></i> Latest Video Series</a></h3>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                    <article class="block">
                        <a class="block-thumbnail" href="http://devdojo.com/series/laravel-5-1-basics">
                            <img src="/res/images/laravel-cover.jpg">
                            <div class="details">
                                <h2>Laravel 5.1 Basics</h2>
                                <span></span>
                            </div>
                        </a>
                    </article>
                </div>
            </div>


            <div class="pagination" style="text-align:center; display:block;  margin:0px auto">
                <ul class="pagination" style="margin:0px; float:right;">
                    <li><a href="/series">View All Video Series</a></li>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h3><a href="/videos"><i class="fa fa-youtube-play" style="position:relative; top:3px;"></i> Latest Lessons</a></h3>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <article class="block">
                        <a class="block-thumbnail" href="http://devdojo.com/video/82">
                            <div class="thumbnail-overlay"></div>
                            <span class="play-button"></span>
                            <img src="/res/images/bg1.jpg">
                            <div class="details">
                                <h2>Laravel Multiple File Upload</h2>
                                <span>11:19</span>
                            </div>
                        </a>
                        <div class="block-contents">
                            <p class="date">December 27th, 2015
                                <span class="label label-info">Free</span>
                            </p>
                            <p class="desc">In this quick video we'll show you how to upload multiple files using a bit of javascript ...</p>
                        </div>
                    </article>
                </div>
            </div>

            <!--
            <div class="pagination" style="text-align:center; display:block;  margin:0px auto">
                <ul class="pagination" style="margin:0px; float:right;">
                    <li><a href="/videos">View All Lessons</a></li>
                </ul>
            </div>

            <div class="row" style="margin-bottom:30px; margin-top:0px;">
                <div class="col-md-12">
                    <h3><a href="/shows"><i class="dojo-lessons"></i> Latest Shows</a></h3>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                    <article class="block">
                        <a class="block-thumbnail" href="http://devdojo.com/shows/foundation">
                            <img src="/content/uploads/images/July2015/55b8043720437-foundation.jpg">
                            <div class="details">
                                <h2>Foundation</h2>
                                <span></span>
                            </div>
                        </a>
                    </article>
                </div>
            </div>
            -->


            <div class="pagination" style="text-align:center; display:block;  margin:0px auto;">
                <ul class="pagination" style="margin:0px; float:right;">
                    <li><a href="/shows">View All Shows</a></li>
                </ul>
            </div>

            <div style="clear:both; height:30px;"></div>

        </div>
    </div>













<script src="http://devdojo.com/content/themes/devdojo/assets/js/pgwslider.min.js"></script>
<script>
    $(document).ready(function() {
        $('.pgwSlider').pgwSlider({ maxHeight: 360 });

        $('.signup-sidebar').hover(function(){
            $(this).find('a').removeClass('bounce').addClass('animated rubberBand');
            $(this).find('img').removeClass('bounce').addClass('animated ');
        }, function(){
            $(this).find('a').removeClass('rubberBand').addClass('bounce');
            //$(this).find('img').removeClass('pulse').addClass('bounce');
        });

    });
</script>
<script>
    jQuery(document).ready(function($) {
        $(".royalSlider").royalSlider({
            // options go here
            // as an example, enable keyboard arrows nav
            keyboardNavEnabled: true,
            loop: true,
            transitionType: 'fade',
            autoPlay: {
                // autoplay options go gere
                enabled: true,
                pauseOnHover: false,
                delay: 5500
            }
        });
    });
</script>

<script src="http://devdojo.com/content/themes/devdojo/assets/js/rrssb.min.js"></script>
