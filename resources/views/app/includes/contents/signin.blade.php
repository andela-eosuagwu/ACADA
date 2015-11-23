@if( isset($response) )
    <script>
    swal("Login Failed", "invalid username / password", "error")
    </script>
@endif

<div class="container">
    <div class="content_middle_bo">
        <div style="margin-left:335px; margin-top:100px;" class="col col-sm-5">
            <form action="signin" method="get">

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>

                    <div class="form-group">
                        <label for="disabledTextInput">username</label>
                        <input type="text" name="username" id="disabledTextInput" class="form-control" placeholder="username">
                    </div>
                   
                    <div class="form-group">
                        <label for="disabledTextInput">password</label>
                        <input type="password" name="password" id="disabledTextInput" class="form-control" placeholder="password">
                    </div>
                
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="/login/facebook" class="btn btn-primary">Facebook</a>
                    <button type="submit" class="btn btn-primary">Twitter</button>
                    <button type="submit" class="btn btn-primary">Github</button>
                
                </fieldset>
            </form>
        </div>
    </div>
</div>

