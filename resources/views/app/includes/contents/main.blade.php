<div class="container">
    <div class="content_middle_box">
        <div class="top_grid">
            @foreach( $videos as $video )
            <div class="col-md-3">
                <div class="grid1">
                    <div class="view view-first">
                        <div class="index_img1">
                            <center>
                                <img src="res/images/{{$video->category}}.png" class="img-responsive" alt="">
                            </center>
                        </div>
                    </div> 

                    <div class="inner_wrap">
                        <a href="video/{{$video->category}}/{{$video->id}}"> 
                            <h3>{{$video->title}}</h3>    
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

