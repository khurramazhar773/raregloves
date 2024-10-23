<?php include 'header.php'; ?>

<body>
	<div class="preloader">
		<div class="spinner">
			<div class="bounce1">
			</div>
			<div class="bounce2">
			</div>
			<div class="bounce3">
			</div>
		</div>
	</div>
	<?php include 'nav.php'; ?>

	<!-- Page Title
============================================= -->
	<section class=" bg-overlay bg-overlay-gradient pb-0">
		<div class="bg-section">
			<img src="assets/images/sliders/main-glove-3-b.jpg" alt="Background" />
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="page-title title-1 text-center">
						<div class="title-bg">
							<h2>contact us</h2>
						</div>
						<ol class="breadcrumb">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li class="active">contact</li>
						</ol>
					</div>
					<!-- .page-title end -->
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>

	<!-- Contact #1
============================================= -->
	<section id="contact" class="contact">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="heading heading-4">
						<div class="heading-bg heading-right">
							<p class="mb-0">We Wanna Hear From You !</p>
							<h2>Contact Us</h2>
						</div>
					</div>
					<!-- .heading end -->
				</div>
				<!-- .col-md-12 end -->
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4 widgets-contact mb-60-xs">
							<div class="widget">
								<div class="widget-contact-icon pull-left">
									<i class="lnr lnr-map"></i>
									
								
								</div>
								<div class="widget-contact-info">
									<p class="text-capitalize">Visit us</p>
									<p class="text-capitalize font-heading">Faisalabad</p>
								</div>
							</div>
							<!-- .widget end -->
							<div class="clearfix">
							</div>
							<div class="widget">
								<div class="widget-contact-icon pull-left">
									<!-- <i class="lnr lnr-envelope"></i> -->
									<i class="fa-solid fa-certificate" style="color: #ffd666;"></i>
								</div>
								<div class="widget-contact-info">
									<p class="text-capitalize ">Certified Company</p>
									<p class="text-capitalize font-heading">ISO 9001: 2010</p>
								</div>
							</div>
							<!-- .widget end -->
							<div class="clearfix">
							</div>
							<div class="widget">
								<div class="widget-contact-icon pull-left">
									<i class="lnr lnr-phone"></i>
								</div>
								<div class="widget-contact-info">
									<p class="text-capitalize">call us</p>
									<p class="text-capitalize font-heading">+92-321-8661538</p>
								</div>
							</div>
							<!-- .widget end -->
						</div>
						<!-- .col-md-4 end -->
						<div class="col-xs-12 col-sm-12 col-md-8">
							<div class="row">
								<form  action="assets/php/contact.php" method="post">
									<div class="col-md-6">
										<input type="text" class="form-control mb-30" name="contact-name" id="name"
											placeholder="Your Name"  required/>
									</div>
									<div class="col-md-6">
										<input type="email" class="form-control mb-30" name="contact-email" id="email"
											placeholder="Your Email"  required/>
									</div>
									<div class="col-md-6">
										<input type="number" class="form-control mb-30" name="contact-telephone"
											id="telephone" placeholder="Telephone" required />
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control mb-30" name="contact-address"
											id="subject" placeholder="Address" required />
									</div>
									<div class="col-md-12">
										<textarea class="form-control mb-30" name="contact-message" id="message"
											rows="2" placeholder="Message Details" required></textarea>
									</div>
									<div class="col-md-12">
										<button type="submit" name="submit" class="btn btn-primary btn-black btn-block">Send Message</button>
									</div>
									
								</form>
							</div>
						</div>
						<!-- .col-md-8 end -->
					</div>
					<!-- .row end -->
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>

	<!-- Google Maps
============================================= -->
	<section class="google-maps pb-0 pt-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 pr-0 pl-0">
					<div id="googleMap" style="width:100%;height:240px;">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- .google-maps end -->

	<?php include 'footer.php'; ?>