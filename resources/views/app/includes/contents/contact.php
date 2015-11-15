<!-- 

 @author     Emeka Osuagwu <emekaosuagwuandela0@gmail.com>
 @copyright  2015 Emeka Osuagwu
 @license    MIT License <http://opensource.org/licenses/MIT>   

 -->
 
 
 <!--
 @Contact Section: takes care of ACDA contact infomations

 @GoogleMap: shows location of ACADA
 @Written Address
    
 -->
<div class="contact">
    <div class="container">
        <h1>Contact Us</h1>
        <div class="col-md-9 wow fadeInLeft" data-wow-delay="0.4s">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
            </div>
        </div>
        
        <div class="col-md-3 wow fadeInRight" data-wow-delay="0.4s">
            <address class="address">
                <p>
                    9870 St Vincent Place, 
                    <br>
                    Glasgow, DC 45 Fr 45.
                </p>
                <dl>
                    <dt></dt>
                    <dd>Freephone:<span> +1 800 254 2478</span></dd>
                    <dd>Telephone:<span> +1 800 547 5478</span></dd>
                    <dd>FAX: <span>+1 800 658 5784</span></dd>
                    <dd>E-mail:&nbsp; <a href="mailto@example.com">info(at)duhoot.com</a></dd>
                </dl>
            </address>
        </div>
    </div>
</div>


 <!--
 @Contact Section: takes care of ACDA contact infomations
 
 @GoogleMap: shows location of ACADA
 @Written Address
 -->
<div class="living_middle wow fadeInUp" data-wow-delay="0.4s">
    <div class="container">
        <h2>Feedback</h2>
        <form method="post" action="contact-post.html">
            <div class="to">
                <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:20px">
                <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" style="margin-left:20px">
                <div class="clearfix"></div>
            </div>
            <div class="text">
               <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
            </div>
            <div class="form-submit1">
               <input name="submit" type="submit" id="submit" value="Send Message">
            </div>
            <div class="clearfix"></div>
        </form>
    </div>      
</div>