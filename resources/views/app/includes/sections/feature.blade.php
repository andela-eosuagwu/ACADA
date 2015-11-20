<!-- 
 The file for the Arr class

 @author     Emeka Osuagwu <emekaosuagwuandela0@gmail.com>
 @copyright  2015 Emeka Osuagwu
 @license    MIT License <http://opensource.org/licenses/MIT>   
 -->

<div class="container">
        <div class="top_grid">
            @foreach( $data['feature'] as $video )
            <div class="col-md-3">
                <div class="grid1">
                    <div class="view view-first">
                        <div class="index_img1">
                            <center>
                                <img src="../../res/images/{{$video->category}}.png" class="img-responsive" alt="">
                            </center>
                        </div>
                    </div> 

                    <div class="inner_wrap">
                        <a href="{{$video->id}}"> 
                            <h3>{{$video->title}}</h3>    
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="clearfix"> </div>
        </div>    
</div>
