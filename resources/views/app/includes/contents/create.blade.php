@if( isset($response) )
    <script>
    swal("Upload successful", "", "success")
    </script>
@endif
<div class="living_middle wow fadeInUp" data-wow-delay="0.4s">
    <div class="container">
        <h2>Post Video</h2>
        <form method="post" action="/video/create">
            <div class="to">
                <input type="text" required="required" name="title" class="text" placeholder = "Video title">
                
                <select required name="categories" class="category_option" >
                    <option value="" >Select Category</option>
                    <option value="php" >PHP</option>
                    <option value="java">JAVA</option>
                    <option value="nodejs">NODEJS</option>
                </select>

                <input type="text" required="required" name="src" class="text" placeholder = "Video Link"  style="margin-left:20px">
                <div class="clearfix"></div>
            </div>


                <center>        
                <input type="text" required="required" name="description" class="text category_option" placeholder = "Add short description">
                </center>
            
            @if(   Auth::check() )  
            <div class="form-submit1">
               <input name="submit" type="submit" id="submit" value="Create">
            </div>
            @endif
            <div class="clearfix"></div>

        </form>

        @if( ! Auth::check() )  
            <div class="form-submit1" >
               <input onclick="cantupload()" type="submit" id="submit" value="Create">
            </div>
        @endif
    </div>      
</div>