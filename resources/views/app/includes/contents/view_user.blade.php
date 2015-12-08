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


                                    <table class="table">
                        <tr>
                            <td>Username</td>
                            <td>{{Auth::user()->username}}</td>
                        </tr>
                        @if (  ! Auth::user()->occupation === null || ! Auth::user()->occupation == '' )
                            <tr>
                                <td>Occupation</td>
                                <td>{{Auth::user()->occupation}}</td>
                            </tr>
                        @else
                            <tr>
                                <td>Occupation</td>
                                <td>add your occupation</td>
                            </tr>
                        @endif
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>


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
            </div>

        </div>

    </div>
</div>
