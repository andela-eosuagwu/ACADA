@if( isset($response) )
    <script>
    swal("Login Failed", "username / email already taking", "error")
    </script>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <div class="content_middle_bo">
        <div style="margin-left:335px; margin-top:100px;" class="col col-sm-5">

            <form method="post" action="/auth/signup">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label class="control-label">Username</label>
                    <input required="required" class="form-control" type="text" name="username" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label class="control-label">E-mail</label>
                    <input required="required" class="form-control" type="email" name="email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label class="control-label">Password</label>
                    <input required="required"  class="form-control" type="password" name="password" id="password">
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

