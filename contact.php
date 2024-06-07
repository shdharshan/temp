<?php include "sendmail.php"; ?>
<!DOCTYPE html>
<html>
   <!-- Mirrored from html.themexriver.com/it-firm/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Apr 2023 02:02:56 GMT -->
   <head>
      <meta charset="utf-8">
      <?php include "title.php"; ?>
      <!-- Stylesheets -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/responsive.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
      <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
      <link rel="icon" href="images/favicon.png" type="image/x-icon">
      <!-- Responsive -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <!-- Google tag (gtag.js) --> 
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-90E9GFLEVL"></script> 
      <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-90E9GFLEVL'); </script> 
   </head>
   <body>
      <div class="page-wrapper">
         <!-- Preloader -->
         <div class="preloader"></div>
         <!-- End Preloader -->
         <?php include "header.php"; ?>
         <!-- Page Title -->
         <section class="page-title" style="background-image:url(images/background/7.jpg)">
            <div class="auto-container">
               <h2>Contact Us</h2>
               <ul class="bread-crumb clearfix">
                  <li><a href="index.php">Home</a></li>
                  <li>Contact Us</li>
               </ul>
            </div>
         </section>
         <!-- End Page Title -->
         <!-- Contact One -->
         <section class="contact-one" style="background-image:url(images/background/map-1.png)">
            <div class="auto-container">
               <!-- Sec Title -->
               <div class="sec-title">
                  <div class="d-flex justify-content-between align-items-center flex-wrap">
                     <div class="left-box">
                        <div class="sec-title_title">Contact us</div>
                        <h2 class="sec-title_heading">Tell us what you are<br> <span>looking for</span></h2>
                     </div>
                     <div class="right-box">
                        <div class="sec-title_text">Whether you have questions, or would just like to say Hello, contact us in form below or drop us an email at <br>contact@symprio.com</div>
                     </div>
                  </div>
               </div>
               <div class="row clearfix">
                  <!-- Info Column -->
                  <div class="info-column col-lg-4 col-md-12 col-sm-12">
                     <div class="inner-column">
                        <!-- Contact Block -->
                        <div class="contact-block">
                           <h5 style="text-align: center;">Office address</h5>
                           <div class="block-inner" style="margin-top: 10px;">
                              <span class="icon"><img src="images/icons/contact-1.png" alt="" /></span>
                              <strong>USA (HQ)</strong>
                              Symprio Inc.<br>333 West San CarlosSt Suite 600 San Jose,  CA 95110
                           </div>
                           <div class="block-inner" style="margin-top: 10px;">
                              <span class="icon"><img src="images/icons/contact-1.png" alt="" /></span>
                              <strong>Malaysia</strong>
                              Symprio Sdn Bhd<br>Tower B, 8-05, Vertical Business Suite Avenue, 3, Jalan Kerinchi, Bangsar South, 59200 Kuala Lumpur
                           </div>
                           <div class="block-inner" style="margin-top: 10px;">
                              <span class="icon"><img src="images/icons/contact-1.png" alt="" /></span>
                              <strong>Singapore</strong>
                              Symprio Pte ltd<br>100 Tras Street #16-01 100 AM Singapore 079027
                           </div>
                           <div class="block-inner" style="margin-top: 10px;">
                              <span class="icon"><img src="images/icons/contact-1.png" alt="" /></span>
                              <strong>India</strong>
                              Symprio Solutions<br>Coimbatore.
                           </div>
                        </div>
                        <!-- Contact Block -->
                        <div class="contact-block">
                           <a href="https://api.whatsapp.com/send?phone=60138802574&text=Say%20hello%20to%20Symprio!" target ="_blank"><img src="images/whatsapp-button.png" alt="" /> </a>
                        </div>
                        <!-- Contact Block -->
                        <div class="contact-block">
                           <div class="block-inner">
                              <span class="icon"><img src="images/icons/contact-3.png" alt="" /></span>
                              <strong>Mail address</strong>
                              contact@symprio.com <br> 
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Form Column -->
                  <div class="form-column col-lg-8 col-md-12 col-sm-12">
                     <div class="inner-column">
                        <!-- Contact Form -->
                        <div class="contact-form">
                           <form method="post" id="contact-form">
                              <div class="row clearfix">
                                 <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Name (required)</label>
                                    <input type="text" name="name" placeholder="Your name*" required="">
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Email adress (required)</label>
                                    <input type="text" name="email" placeholder="Email" required="">
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <label>Phone (required)</label>
                                    <input type="tel" id="phone" name="phone" placeholder="Phone" required="">
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <label>Subject (required)</label>
                                    <input type="text" name="subject" placeholder="Subject" required="">
                                 </div>
                                 <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label>Your message</label>
                                    <textarea maxlength="300" class="" name="message" placeholder="Your text here..."></textarea>
                                 </div>
                                 <div class="form-group">
                                    <!-- Google reCAPTCHA block -->
                                    <div class="g-recaptcha" data-sitekey="6LddsoUmAAAAAOxDWGXq18Q1RSGy7QDBdL6Vf8l6"></div>
                                 </div>
                                 <div class="col-lg-12 col-md-12 col-sm-12 form-group" >
                                    <button class="btn-style-seven theme-btn" type="submit" name="submit" id="btn_submit">
                                    <span class="btn-wrap">
                                    <span class="text-one">Send message</span>
                                    <span class="text-two">Send message</span>
                                    </span>
                                    </button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <!-- End Comment Form -->
                     </div>
                     <!--
                        <section class="map-one">
                        	<div class="map-outer">
                        		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
                        	</div>
                        </section>
                        -->
                  </div>
               </div>
            </div>
         </section>
         <!-- End Contact One -->
         <!-- 
            <section class="map-one">
            	<div class="map-outer">
            		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
            	</div>
            </section>
            End Map One -->
         <?php include "footer.php"; ?>
         <!-- End Footer -->
      </div>
      <!-- End PageWrapper -->
      <!-- Search Popup -->
      <div class="search-popup">
         <div class="color-layer"></div>
         <button class="close-search"><span class="flaticon-020-x-mark"></span></button>
         <form method="post" action="#">
            <div class="form-group">
               <input type="search" name="search-field" value="" placeholder="Search Here" required="">
               <button type="submit"><i class="flaticon-001-loupe"></i></button>
            </div>
         </form>
      </div>
      <!-- End Search Popup -->
      <!-- 
         <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
         Scroll To Top -->
      <script src="js/jquery.js"></script>
      <script src="js/appear.js"></script>
      <script src="js/owl.js"></script>
      <script src="js/wow.js"></script>
      <script src="js/validate.js"></script>
      <script src="js/odometer.js"></script>
      <script src="js/mixitup.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/parallax.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/tilt.jquery.min.js"></script>
      <script src="js/magnific-popup.min.js"></script>
      <script src="js/script.js"></script>
      <!-- Google reCaptcha -->
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <script type="text/javascript">
         function callback() {
           const submitButton = document.getElementById("btn_submit");
           submitButton.removeAttribute("disabled");
         }
      </script>
      <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
      <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
   </body>
   <!-- Mirrored from html.themexriver.com/it-firm/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Apr 2023 02:02:57 GMT -->
</html>
