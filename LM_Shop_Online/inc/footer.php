</div>
<div class="bg-ligt footer">
    <div class="wrapper">
        <div class="section group mt-3">
            <div class="container-fluid mt-3">
                <div class="row text-white">
                    <div class="col-md-3">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Customer Service</a></li>
                            <li><a href="#"><span>Advanced Search</span></a></li>
                            <li><a href="#">Orders and Returns</a></li>
                            <li><a href="#"><span>Contact Us</span></a></li>
                        </ul>    
                    </div>  
                    <div class="col-md-3">
                         <h4>My account</h4>
                        <ul>
                            <li><a href="contact.php">Sign In</a></li>
                            <li><a href="index.php">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="faq.php">Help</a></li>
                        </ul>  
                    </div>  
                    <div class="col-md-3">
                        <h4>Contact</h4>
                        <ul>
                            <li><span>rutatut2000@gmail.com</span></li>
                            <li><span>+84-01813458552</span></li>
                        </ul>  
                    </div>  
                    <div class="col-md-3">
                         <h4>Follow Us</h4>
                        <ul class="d-flex justify-content-between">
                            <li class="facebook"><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li class="googleplus"><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="contact"><a href="#" target="_blank"><i class="fas fa-id-card-alt"></i></a></li>
                        </ul>   
                    </div>  
                </div>  
            </div>
        </div>
        <div class="copy_right">
            <p>Training with live project &amp; All rights Reseverd </p>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $().UItoTop({
        easingType: 'easeOutQuart'
    });

});
</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
$(function() {
    SyntaxHighlighter.all();
});
$(window).load(function() {
    $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider) {
            $('body').removeClass('loading');
        }
    });
});
</script>
</body>

</html>