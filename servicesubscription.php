<?php include "sendSubscriptionmail.php"; ?>
<!DOCTYPE html>
<html>

<!-- Mirrored from html.themexriver.com/it-firm/service-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Apr 2023 02:02:48 GMT -->
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

</head>

<body>
 
<div class="page-wrapper">
	
    <!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
 	
	<?php include "header.php"; ?>
	
	<!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/7.jpg);" >
        <div class="auto-container">
			<h2>Service subscription</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index.php">Home</a></li>
				<li>Service subscription</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<div class="row">
					<div class="comment-form">
						<div class="group-title">
							<h3 style="text-align: center;">Order now and get expert advise in hours</h3>
						</div>
						<!-- Comment Form -->
						<div class="row">

							<div class="col-lg-4 col-md-4 col-sm-12">
								<section class="cta-one" style="background-color: rgb(15 103 246);">
									<div class="auto-container">
										<div class="d-flex justify-content-between align-items-center flex-wrap">
											<div class="left-box">
												<h3 class="cta-one_heading" style="text-align: center;">Get your MS Power Automate or UiPath automations <br>solved in hours.</h3>
												<div class="cta-one_text" style="text-align: center;">Service subscription model for automation implementation & support.​</div>
											</div>

										</div>
									</div>
								</section>

									<div class="row clearfix" style="margin-top: 30px;">
										<!-- Column -->
										<div class="column col-lg-6 col-md-6 col-sm-12" style="margin-top: 10px;">
											<div class="lower-image">
												<img src="images/clients/microsoftpartner.jpg" alt="" />
											</div>
										</div>
										<!-- Column -->
										<div class="column col-lg-6 col-md-6 col-sm-12" style="margin-top: 10px;">
											<div class="lower-image">
												<img src="images/clients/uipath.jpg" alt="" />
											</div>
										</div>
									</div>
							</div>


							<div class="col-lg-8 col-md-4 col-sm-12">
							
								<form method="post" id="subscription-form">
									<div class="row clearfix">
										<div class="col-lg-4 col-md-4 col-sm-4 form-group">
											<label>Select Hours </label>
											<input type="number" name="hrs" placeholder="30" min="30" style="font-size:30px;">
										</div>

										<div class="col-lg-4 col-md-4 col-sm-4 form-group">
											<label>Total Price ($) </label>
											
											<input type="number" id="total_hrs" name="total_hrs" placeholder="1200" readonly="readonly" style="font-size:30px;">
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 form-group">
											
										</div>
									</div>

									<div class="comment-form">
										<div class="group-title">
											
										</div>

								
										<div class="row clearfix">

											<div class="col-lg-12 col-md-12 col-sm-12 form-group">
												<div class="check-box"><input type="checkbox" name="shipping-option" id="account-option"> &ensp; <label for="account-option">I have read the <a href="Subscription_agreement.php" target="_blank">agreement</a></label></div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4 form-group">
												<input type="text" name="name" placeholder="Name*" required>
											</div>
											
											<div class="col-lg-4 col-md-4 col-sm-4 form-group">
												<input type="email" name="email" placeholder="Email*" required>
											</div>
											
											<div class="col-lg-4 col-md-4 col-sm-4 form-group">
												<input type="text" name="phone" placeholder="Mobile*" required>
											</div>
											
											<div class="col-lg-12 col-md-12 col-sm-12 form-group">
												<textarea name="message" placeholder="Your Comment here..."></textarea>
											</div>

											<div class="col-lg-4 col-md-4 col-sm-12 form-group">
												<button class="btn-style-seven theme-btn" type="submit" name="submit">
													<span class="btn-wrap">
														<span class="text-one">Subscribe Now</span>
														<span class="text-two">Subscribe Now</span>
													</span>
												</button>
											</div>
											<!--
											<div class="col-lg-4 col-md-4 col-sm-12 form-group">
												<?php //require_once('./config.php'); ?>
												<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
													data-key="<?php echo $stripe['publishable_key']; ?>"
													data-description="Symprio Subscription"
													data-amount= a
													data-locale="auto">

												</script>		
												
											</div>
											-->
										</div>
								
									
									</div>
								</form>

								<!--
								<?php //require_once('./config.php'); ?>

								<form action="charge.php" method="post">
									<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
										data-key="<?php //echo $stripe['publishable_key']; ?>"
										data-description="Access for a year"
										data-amount="document.getElementsByName('total_hrs')[0].value"
										data-locale="auto">
									</script>
								</form>
-->
							</div>

						</div>	
							
					</div>

					
					
				</div>
			
			</div>
		</div>
	</div>
	<!-- End Sidebar Page Container -->

	<?php include "footer.php"; ?>
	
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

<script src="js/jquery.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/odometer.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/magnific-popup.min.js"></script>

<script src="js/script.js"></script>

<script>
	document.getElementsByName('hrs')[0].addEventListener('input',update_hrs);
	//document.getElementsByName('spin_up')[0].addEventListener('click',update_hrs);
	//document.getElementsByName('spin_down')[0].addEventListener('click',update_hrs);

	function update_hrs(){
		var a = document.getElementsByName('hrs')[0].value * 40;
		document.getElementsByName('total_hrs')[0].value = a
	}
</script>

<script>
	document.getElementsByName('hrs')[0].addEventListener('input',check_hrs);
	//document.getElementsByName('spin_up')[0].addEventListener('click',update_hrs);
	//document.getElementsByName('spin_down')[0].addEventListener('click',update_hrs);

	function check_hrs(){
		var val = document.getElementsByName('hrs')[0].value;
		if (val < 30){
			document.getElementsByName('hrs')[0].value = 30
		}
	}
</script>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</body>

<!-- Mirrored from html.themexriver.com/it-firm/service-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Apr 2023 02:02:50 GMT -->
</html>