<div class="content_middle">
    <div class="container">
        <div class="content_middle_box">

            <div class="middle_grid wow fadeInUp" data-wow-delay="0.4s">
            	@foreach ($data['feature'] as $video)
	                <div class="col-md-6 margin-1">
	                    <div class="grid1">
	                        <div class="index_img"><img src="{{ asset('res/images/pic4.jpg') }}" class="img-responsive" alt=""/></div>
	                        <i class="m_home"> </i>
	                        <div class="inner_wrap1">
	                            <ul class="item_module">
	                                <li class="module_right">
									<p>{{$video->title}}</p>
	                                </li>
	                                <div class="clearfix"> </div>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
</div>


