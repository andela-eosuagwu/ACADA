@if( isset($response) )
    <script>
    swal("Login Failed", "username / email already taking", "error")
    </script>
@endif

<div class="container">
    <div class="content_middle_bo">
        <div style="margin-left:335px; margin-top:100px;" class="col col-sm-5">
            <form action="signup" method="post">

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>

                    <div class="form-group">
                        <label for="disabledTextInput">username</label>
                        <input type="text" name="username" id="disabledTextInput" class="form-control" placeholder="username">
                    </div>
                   
                    <div class="form-group">
                        <label for="disabledTextInput">email</label>
                        <input type="email" name="email" id="disabledTextInput" class="form-control" placeholder="email">
                    </div>

                    <div class="form-group">
                        <label for="disabledTextInput">password</label>
                        <input type="password" name="password" id="disabledTextInput" class="form-control" placeholder="password">
                    </div>
                
                    <button type="submit" class="btn btn-primary">Register</button>
                    <a href="/login/facebook" class="btn btn-primary">Facebook</a>
                    <a href="/login/twitter" class="btn btn-primary">Twitter</a>
                    <a href="/login/github" class="btn btn-primary">Github</a>

                </fieldset>
            </form>
        </div>
    </div>
</div>

