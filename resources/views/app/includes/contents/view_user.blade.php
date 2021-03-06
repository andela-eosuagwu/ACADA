<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container card-con">
    <div class="row">
        <div class="col-lg-3 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                
                @if( is_null(Auth::user()->avatar) || Auth::user()->avatar == '')
                    <div class="avatar">
                        <img alt="" src="{{ asset('res/images/profile.png') }}">
                    </div>
                @else
                    <div class="avatar">
                        <img alt="" src="{{ Auth::user()->avatar}}">
                    </div>
                @endif

                <div class="info">
                    <div class="title" style="font-size:14px;">
                        {{Auth::user()->username}}
                    </div>
                    <div class="desc">{{Auth::user()->occupation}}</div>
                </div>
                <center>
                    <p>
                        <a href="/user/edit" class="btn  btn-primary" role="button">Edit Profile</a> 
                        <a href="/user/videos" class="btn  btn-primary" role="button">My Videos</a> 
                    </p>
                </center>
                <br>
            </div>

        </div>

    </div>
</div>
