<div class="living_middle wow fadeInUp" data-wow-delay="0.4s">
    <div class="container">
        <h2>Feedback</h2>
        <form method="get" action="createpost">
            <div class="to">
                <input type="text" name="title" class="text" placeholder = "Video title">
                
                <!-- <input type="text" name="category" class="text" placeholder = "Video category" style="margin-left:20px"> -->
                <select name="category" class="category_option">
                	<option value="none" >Select Category</option>
                	<option value="php" >PHP</option>
                	<option value="java">JAVA</option>
                	<option value="nodejs">NODEJS</option>
                </select>

                <input type="text" name="src" class="text" placeholder = "Video Link"  style="margin-left:20px">
                <div class="clearfix"></div>
            </div>

            <div class="form-submit1">
               <input name="submit" type="submit" id="submit" value="Create">
            </div>
            <div class="clearfix"></div>
        </form>
    </div>      
</div>