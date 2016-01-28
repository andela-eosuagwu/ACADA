    <div class="container">

        <div id="home-content">

            <div class="row">
                <div class="col-md-12">
                    <h3><a href="/videos"><i class="fa fa-youtube-play" style="position:relative; top:3px;"></i> Latest Lessons</a></h3>
                </div>

                @foreach($video_data as $video)
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <article class="block">
                        <a class="block-thumbnail" href="/video/{{$video->id}}">
                            <div class="thumbnail-overlay"></div>
                            <span class="play-button"></span>
                            <iframe style="width:100%; height:40%" src="https://youtube.com/embed/{{ $video->src }}" frameborder="0" allowfullscreen></iframe>

                            <div class="details">
                                <h2>{{$video->title}}</h2>
                                <span>{{$video->created_at->diffForHumans()}}</span>
                            </div>
                        </a>
                        <div class="block-contents" style="overflow: hidden;">
                            <p class="date">
                                {{$video->title }}
                                <span class="label label-info">Views {{$video->views}}</span>
                            </p>
                            <p class="desc">{{$video->description}}</p>
                        </div>
                    </article>
                </div>
                @endforeach
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
