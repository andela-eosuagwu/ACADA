@if( isset($response) )
    <script>
    swal("Login Failed", "invalid username / password", "error")
    </script>
@endif

<div class="container">
    <div class="content_middle_bo">
        <div style="margin-left:335px; margin-top:100px;" class="col col-sm-5">

            <form method="post" action="/signin">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label class="control-label">Username</label>
                    <input class="form-control" type="text" name="username" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label class="control-label">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>

                <div class="form-group">
                    <input class="form-inline" type="checkbox" name="remember"> Remember Me
                </div>

                <div class="form-group">
                    <button class="form-control" type="submit">Login</button>
                </div>
                <center>
                    
                <a href="/login/facebook" class="btn btn-primary">Facebook</a>
                <a href="/login/twitter" class="btn btn-primary">Twitter</a>
                <a href="/login/github" class="btn btn-primary">Github</a>
                </center>
            </form>
            
        </div>


        </div>
    </div>
</div>

