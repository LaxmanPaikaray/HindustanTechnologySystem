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
                    	<div class="text">Gala no 1 Agi kampawant Wakipada,<br> Naigaon E Rd, Vasai-Virar, Maharashtra 401208</div>
                    </div>
                </div>
                
                <div class="column col-md-4 col-sm-6 col-xs-12">
                	<div class="info-box wow zoomInStable" data-wow-delay="500ms" data-wow-duration="1500ms">
                    	<!--icon-box-->
                    	<div class="icon-box">
                        	<span class="flaticon-mail-3"></span>
                        </div>
                        
                    	<h3>Mail Us</h3>
                    	<div class="text">sujithindustantechnologysystem@gmail.com<br>info@hindustantechnologysystem.com</div>
                    </div>
                </div>
                
                <div class="column col-md-4 col-sm-6 col-xs-12">
                	<div class="info-box wow zoomInStable" data-wow-delay="1000ms" data-wow-duration="1500ms">
                    	<!--icon-box-->
                    	<div class="icon-box">
                        	<span class="flaticon-technology"></span>
                        </div>
                        
                    	<h3>Call Us</h3>
                    	<div class="text">+91-7410-176680<br><br></div>
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
                
                <form method="post"  id="contact-form">
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
                <div id="res-message"></div>
            </div>
            <!--End Contact Form -->
                
        </div>
    </section>
    
    <!--Map Section-->
    <section class="map-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.208179357499!2d72.87917781438104!3d19.360136548011738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7af7bcb31090b%3A0x12382e50a8451231!2sHindustan%20Technology%20System!5e0!3m2!1sen!2sin!4v1593938674249!5m2!1sen!2sin" width="100%" height="450" 
    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
<script>
$("#contact-form").submit(function(e){
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "mail.php",
        data: $('#contact-form').serialize(),
        success: function(res){
            $("#res-message").text(res);
            setTimeout(() => {
                $("#res-message").text("")
            }, 2000);
        }
    });
})
</script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key="></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
<?php include 'quote.php'?>
</body>

<!-- Mirrored from world5.commonsupport.com/html2/brighton/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jun 2020 16:02:35 GMT -->
</html>
