<!DOCTYPE html>
<html>

<!-- Mirrored from world5.commonsupport.com/html2/brighton/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jun 2020 16:02:29 GMT -->
<head>
<?php include 'commonlinks.php'?>
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"><div class="loader"><div class="cssload-container"><div class="cssload-speeding-wheel"></div></div></div></div>
 	
    <!-- Main Header-->

    <?php include 'header.php'?>
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/featured-2-bg.jpg);">
        <div class="auto-container">
            <h1>Contact Us</h1>
        </div>
        
        <!--page-info-->
        <div class="page-info">
        	<div class="auto-container">
            	<div class="row clearfix">
            
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="social-nav clearfix">
                            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            <li><a href="#"><span class="fa fa-flickr"></span></a></li>
                        </ul>
                    </div>
                
                </div>
            </div>
        </div>
        
    </section>
    
    <!--contact-info-->
    <section class="contact-info-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<div class="column col-md-4 col-sm-6 col-xs-12">
                	<div class="info-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<!--icon-box-->
                    	<div class="icon-box">
                        	<span class="flaticon-home-1"></span>
                        </div>
                        
                    	<h3>Visit Us</h3>
                    	<div class="text">A105, New lessi, Walton st,<br>United States - 230A</div>
                    </div>
                </div>
                
                <div class="column col-md-4 col-sm-6 col-xs-12">
                	<div class="info-box wow zoomInStable" data-wow-delay="500ms" data-wow-duration="1500ms">
                    	<!--icon-box-->
                    	<div class="icon-box">
                        	<span class="flaticon-mail-3"></span>
                        </div>
                        
                    	<h3>Mail Us</h3>
                    	<div class="text">support@brighton.com<br>info@brighton.com</div>
                    </div>
                </div>
                
                <div class="column col-md-4 col-sm-6 col-xs-12">
                	<div class="info-box wow zoomInStable" data-wow-delay="1000ms" data-wow-duration="1500ms">
                    	<!--icon-box-->
                    	<div class="icon-box">
                        	<span class="flaticon-technology"></span>
                        </div>
                        
                    	<h3>Call Us</h3>
                    	<div class="text">(+01) 22-333-4444-000<br>(+01) 33-444-5555-001</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!--contact-section-->
    <section class="contact-form-section">
    	<div class="auto-container">
        	<div class="sec-title-eight padd-bott-10">
                <h2>Keep in Touch with us</h2>
            </div>
            	
            <!-- Contact Form -->
            <div class="default-form contact-form">
                
                <form method="post" action="http://world5.commonsupport.com/html2/brighton/sendemail.php" id="contact-form">
					<div class="row clearfix">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="username" value="" placeholder="Name *">
                        </div>
    
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="email" name="email" value="" placeholder="Email *">
                        </div>
    
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <input type="text" name="subject" value="" placeholder="Subject *">
                        </div>
    
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea name="message" placeholder="Message *"></textarea>
                        </div>
    
                        <div class="form-group col-md-12 col-sm-12 col-xs-12"><button type="submit" class="theme-btn btn-style-three">Send Message</button></div>
					</div>
                </form>
                
            </div>
            <!--End Contact Form -->
                
        </div>
    </section>
    
    <!--Map Section-->
    <section class="map-section">
    	<div class="map-outer">

            <!--Map Canvas-->
            <div class="map-canvas"
                data-zoom="10"
                data-lat="23.815811"
                data-lng="90.412580"
                data-type="roadmap"
                data-hue="#fc721e"
                data-title="Dhaka"
                data-content="Dhaka 1000-1200, Bangladesh<br><a href='mailto:info@youremail.com'>info@youremail.com</a>"
                style="height:480px;">
            </div>

        </div>
    </section>
    
    
    <!--Main Footer-->
    <?php include 'footer.php'?>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>

<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key="></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

</body>

<!-- Mirrored from world5.commonsupport.com/html2/brighton/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jun 2020 16:02:35 GMT -->
</html>
