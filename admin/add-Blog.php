<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
	<!-- Document Meta
============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--IE Compatibility Meta-->
	<meta name="author" content="wplly" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="construction html5 template">
	<link href="../assets/images/favicon/favicon.ico" rel="icon">

	<!-- Fonts
============================================= -->
	<link
		href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:100,200,300,400,500,600,700,800%7CDroid+Serif:400,400italic,700,700italic'
		rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

	<!-- Stylesheets
============================================= -->
	<link href="../assets/css/external.css" rel="stylesheet">
	<!-- Extrnal CSS -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Boostrap Core CSS -->
	<link href="../assets/css/style.css" rel="stylesheet">
	<link href="../assets/css/product.css" rel="stylesheet">
	<!-- Style CSS -->

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
      <script src="../assets/js/respond.min.js"></script>
    <![endif]-->

	<!-- Document Title
============================================= -->
	<title>Yellow Hats | Construction Business HTML5 Template</title>
</head>

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
	<header id="navbar-spy" class="transparent-header">
		<nav id="primary-menu" class="navbar navbar-fixed-top style-1">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="logo" href="../home-2.html">
						<img src="../assets/mian-logo.jpg" alt="Rare Gloves">
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left">
						<li class="has-dropdown">
							<a href="../home-2.html">home</a>
						</li>
						<!-- li end -->
						<li class="has-dropdown">
							<a href="../about-2.html">about us</a>
						</li>
						<!-- li end -->
						<li class="has-dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">services</a>
							<ul class="dropdown-menu">
								<li>
									<a href="../custom-glove.html">Custom Gloves</a>
								</li>
								<li>
									<a href="pricing.html">Glove Restoration</a>
								</li>
							</ul>
						</li>
						<!-- li end -->
						<li class="has-dropdown active">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle ">products</a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
									<a href="industery-create-panel.html">industerialgloves</a>
								</li>
								<li class="dropdown-submenu">
									<a href="fancy-create-panel.html">fancy gloves</a>
								</li>
							</ul>
						</li>
						<!-- li end -->

						<!-- li end -->
						<li class="has-dropdown">
							<a href="../blog.php">blog</a>
						</li>
						<li class="has-dropdown">
							<a href="../faq.html">FAQS</a>
						</li>
						<li class="has-dropdown pull-left">
							<a href="../contact.html">contact</a>
						</li>
						<!-- li end -->
					</ul>

				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
	</header>

	<!-- Page Title
============================================= -->
	<section class=" bg-overlay bg-overlay-gradient pb-0">
		<div class="bg-section">
			<img src="../assets/images/sliders/main-glove-3-b.jpg" alt="Background" />
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="page-title title-1 text-center">
						<div class="title-bg">
							<h2>Add blogs</h2>
						</div>
						<ol class="breadcrumb">
							<li>
								<a href="industery-create-panel.html">Industery</a>
							</li>
							<li class="active">bloging</li>
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
							<p class="mb-0 text-left">Add blog on Web</p>
							<h2>Make blog</h2>
						</div>
					</div>
					<!-- .heading end -->
				</div>
				<!-- .col-md-12 end -->
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="row">
						<!-- .col-md-4 end -->
						<div class="col-xs-12 col-sm-12 col-md-8">

							<form class="forming" action="../assets/php/blog.php" method="post" enctype="multipart/form-data">
								<label for="title">Title</label>
								<input type="text" class="input" name="title" id="title" required>
							
								<label for="heading">Heading</label>
								<input type="text" class="input" name="heading" id="heading" required>
								
                                <label for="full_detail">Content</label>
								<textarea style="height: 200px;width: 400px;" name="full_detail" id="full_detail"></textarea>
							
								<label for="imgs">Upload Product Image</label>
								<input type="file" name="image" id="img">
								
							
								<div class="col-md-12">
									<button type="submit" name="submit" class="btn btn-primary btn-black btn-block">Add Product</button>
								</div>
							</form>
							
							

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

	<footer id="footer" class="footer-1">
		<!-- Contact Bar
	============================================= -->
		<div class="container footer-widgtes">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="widgets-contact">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 widget">
								<div class="widget-contact-icon pull-left">
									<i class="lnr lnr-map"></i>
								</div>
								<div class="widget-contact-info">
									<p class="text-capitalize text-white">visit us</p>
									<p class="text-capitalize font-heading">Faisalabad</p>
								</div>
							</div>
							<!-- .widget end -->
							<div class="col-xs-12 col-sm-12 col-md-4 widget">
								<div class="widget-contact-icon pull-left">
									<!-- <i class="lnr lnr-envelope"></i> -->
									<i class="fa-solid fa-certificate"></i>

								</div>
								<div class="widget-contact-info">
									<p class="text-capitalize text-white">Certified Company</p>
									<p class="text-capitalize font-heading">ISO 9001: 2010</p>
								</div>
							</div>
							<!-- .widget end -->
							<div class="col-xs-12 col-sm-12 col-md-4 widget">
								<div class="widget-contact-icon pull-left">
									<i class="lnr lnr-phone"></i>
								</div>
								<div class="widget-contact-info">
									<p class="text-capitalize text-white">call us</p>
									<p class="text-capitalize font-heading">+92-321-8661538</p>
								</div>
							</div>
							<!-- .widget end -->
						</div>
						<!-- .row end -->
					</div>
					<!-- .widget-contact end -->
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->

		<!-- Widget Section
	============================================= -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 widgets-links">
					<div class="col-xs-12 col-sm-12 col-md-4 widget-about text-center-xs mb-30-xs">
						<div class="widget-about-logo pull-left pull-none-xs">
							<img src="../assets/images/footer.logo.jpg" style="width: 76px;" alt="logo" />
						</div>
						<div class="widget-about-info">
							<h5 class="text-capitalize text-white">Rare Gloves</h5>
							<p class="mb-0">At Rare Gloves, we prioritize premium materials and precise craftsmanship.
								Every glove is made with attention to detail, ensuring long-lasting
								durability and comfort.</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 widget-navigation text-center-xs mb-30-xs">
						<h5 class="text-capitalize text-white">navigation</h5>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<ul class="list-unstyled text-capitalize">
									<li>
										<a href="#"> about us</a>
									</li>
									<li>
										<a href="#"> careers</a>
									</li>
									<li>
										<a href="#"> pricing plans</a>
									</li>
								</ul>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<ul class="list-unstyled text-capitalize">
									<li>
										<a href="#"> team</a>
									</li>
									<li>
										<a href="#"> projects</a>
									</li>
									<li>
										<a href="#"> FAQs</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-5 widget-services text-center-xs">
						<h5 class="text-capitalize text-white">services</h5>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-4">
								<ul class="list-unstyled text-capitalize">
									<li>
										<a href="#"> Authentication &amp; Valuation</a>
									</li>
									<li>
										<a href="#"> Custom Glove Sourcing</a>
									</li>
									<li>
										<a href="#"> Glove Restoration</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Social bar
	============================================= -->
		<div class="widget-social">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 mb-30-xs mb-30-sm">
						<div class="widget-social-info pull-left text-capitalize pull-none-xs mb-15-xs">
							<p class="mb-0">follow us<br>
								on social networks</p>
						</div>
						<div class="widget-social-icon pull-right text-right pull-none-xs">
							<a href="#">
								<i class="fa fa-facebook"></i><i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i><i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i>
							</a>
							<a href="#">
								<i class="fa fa-vimeo-square"></i><i class="fa fa-vimeo-square"></i>
							</a>
							<a href="#">
								<i class="fa fa-pinterest"></i><i class="fa fa-pinterest"></i>
							</a>
							<a href="#">
								<i class="fa fa-flickr"></i><i class="fa fa-flickr"></i>
							</a>
							<a href="#">
								<i class="fa fa-rss"></i><i class="fa fa-rss"></i>
							</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="widget-newsletter-info pull-left text-capitalize pull-none-xs mb-15-xs">
							<p class="mb-0">subsribe<br>
								on our newsletter</p>
						</div>
						<div class="widget-newsletter-form pull-right text-right">

							<!-- Mailchimp Form 
						=============================================-->
							<form class="mailchimp">
								<div class="subscribe-alert">
								</div>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Type Your Email Account">
									<span class="input-group-btn">
										<button class="btn text-capitalize" type="button">join</button>
									</span>
								</div>
								<!-- /input-group -->
							</form>
							<!--Mailchimp Form End-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Copyrights
	============================================= -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 copyrights text-center">
					<p class="text-capitalize">Developed by © CSOFT Systems Pvt. Ltd</p>
					<p class="text-capitalize">All rights reserved.
						<!-- <a href="http://themeforest.net/user/7oroof/portfolio?ref=7oroof">7oroof.com</a> -->
					</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- Footer Scripts
============================================= -->
	<script src="../assets/js/jquery-2.1.1.min.js"></script>
	<script src="../assets/js/plugins.js?v=1.0.0"></script>
	<script src="../assets/js/functions.js?v=1.2.0"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript" src="../assets/js/jquery.gmap.min.js"></script>
	<script type="text/javascript">
		$('#googleMap').gMap({
			address: "121 King St,Melbourne, Australia",
			zoom: 15,
			markers: [
				{
					address: "Melbourne, Australia",
					maptype: 'ROADMAP',
				}
			]
		});
	</script>
</body>

</html>