<div class="container">
    <div class="content_middle_box centered" >
        
            <div class="row" style=" margin-left:398px; width:1260px;  text-align:center" >
                <div class="col-xs-6 col-md-3">
                    @if( is_null(Auth::user()->avater) || Auth::user()->avater == '')
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('res/images/profile.png') }}" alt="...">
                        </a>
                    @else
                        <a href="#" class="thumbnail">
                            <img src="{{ Auth::user()->avater }}" alt="...">
                        </a>
                    @endif
                    <h1>{{Auth::user()->username}}</h1>
                    <h4>{{Auth::user()->occupation}}</h4>

                    <p>{{Auth::user()->email}}</p>
                    <br>
                    <p>
                        <a href="/user/edit/{{Auth::user()->id}}" class="btn  btn-primary" role="button">Edit Profile</a> 
                        <a href="/view" class="btn  btn-primary" role="button">My Videos</a> 
                    </p>
                </div>
            </div>    
        
    </div>
</div>

