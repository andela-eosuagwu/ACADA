<!-- 
 The file for the Arr class

 @author     Emeka Osuagwu <emekaosuagwuandela0@gmail.com>
 @copyright  2015 Emeka Osuagwu
 @license    MIT License <http://opensource.org/licenses/MIT>   

 @CodeFuntion: Video Player.
 -->

@foreach( $videos as $video )
	<div class="banner">
	    <div class="container_wrap margin-1">
	        <h1>{{$video->title}}</h1>
	        <h1 style="font-size:12px; margin-top: -20px; margin-bottm: 50px;">{{$video->description}}</h1>
	        <iframe style=" margin-top: 10px;" class="player" src="{{$video->src}}" frameborder="0" allowfullscreen></iframe>
	    </div>
	</div>	
@endforeach

