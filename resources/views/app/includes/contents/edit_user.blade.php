<div class="container">
    <div class="content_middle_box centered" >
        
        <div class="row" style="text-align:center" >
            <form action="{{ route('user.update') }}" method="post" class="form-horizontal col-sm-9">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="form-group has-success has-feedback">
                    <label class="control-label col-sm-3" for="inputSuccess3">Username</label>
                    <div class="col-sm-9">
                        <input type="text" value = "Auth::user()->username" name="username" class="form-control" id="inputSuccess3" aria-describedby="inputSuccess3Status">
                        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                        <span id="inputSuccess3Status" class="sr-only">(success)</span>
                    </div>
                </div>

                <div class="form-group has-success has-feedback">
                    <label class="control-label col-sm-3" for="inputSuccess3">Avater</label>
                    <div class="col-sm-9">
                        <input type="text" name="avater" value = "Auth::user()->avatar" class="form-control" id="inputSuccess3" aria-describedby="inputSuccess3Status">
                        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                        <span id="inputSuccess3Status" class="sr-only">(success)</span>
                    </div>
                </div>

                <div class="form-group has-success has-feedback">
                    <label class="control-label col-sm-3" for="inputSuccess3">Occupation</label>
                    <div class="col-sm-9">
                        <input type="text" name="occupation" value = "Auth::user()->occupation" class="form-control" id="inputSuccess3" aria-describedby="inputSuccess3Status">
                        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                        <span id="inputSuccess3Status" class="sr-only">(success)</span>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary ">Update</button>
                <a href="/user/1">Profile</a>
            </form> 
        </div>    
        
    </div>
</div>

