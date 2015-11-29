 @include('app.includes.sections.banner')

 <div class="container">
    <div class="content_middle_box centered" >
        
            <div class="row" style=" margin-left:398px; width:1260px;  text-align:center" >
                <div class="col-xs-6 col-md-3">
                    @if( is_null(Auth::user()->avatar) || Auth::user()->avatar == '')
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('res/images/profile.png') }}" alt="...">
                        </a>
                    @else
                        <a href="#" class="thumbnail">
                            <img src="{{ Auth::user()->avatar}}" alt="...">
                        </a>
                    @endif
                    <table class="table">
                        <tr>
                            <td>Username</td>
                            <td>{{Auth::user()->username}}</td>
                        </tr>
                        <tr>
                            <td>Occupation</td>
                            <td>{{Auth::user()->occupation}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{Auth::user()->email}}</td>
                        </tr>
                    </table>
                    
                    <br>
                    <p>
                        <a href="/user/edit" class="btn  btn-primary" role="button">Edit Profile</a> 
                        <a href="/user/videos" class="btn  btn-primary" role="button">My Videos</a> 
                    </p>
                </div>
            </div>    
        
    </div>
</div>

