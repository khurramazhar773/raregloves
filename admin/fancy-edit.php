<?php
include '../assets/php/config.php';

$sel = "SELECT p.id, p.product_name, p.description, p.image_url, c.category_name 
        FROM products_2 p 
        JOIN categories_2 c ON p.category_id = c.id ";

$ResulT = $conn->query($sel);

?>
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
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:100,200,300,400,500,600,700,800%7CDroid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- Stylesheets
============================================= -->
<link href="../assets/css/external.css" rel="stylesheet">
<!-- Extrnal CSS -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Boostrap Core CSS -->
<link href="../assets/css/style.css" rel="stylesheet">
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
	<header id="navbar-spy" class="full-header">
		<div id="top-bar" class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 hidden-xs">
						<ul class="list-inline top-contact">
							<li>
								<p>Phone:
									<span>+92-321-8661538</span>
								</p>
							</li>
							<li>
								<p>Email:
									<span>nasir123@gmail.com</span>
								</p>
							</li>
						</ul>
					</div>
					<!-- .col-md-6 end -->
					<div class="col-xs-12 col-sm-6 col-md-6 text-right">
						<ul class="list-inline top-widget">
							<li class="top-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-vimeo"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-rss"></i></a>
							</li>
							<li>
								<a class="button-quote" href="#" data-toggle="modal" data-target="#hmodel-quote"
									id="hmodelquote">Get A Quote</a>
								<!-- Modal -->
								<div class="modal fade model-quote" id="hmodel-quote" tabindex="-1" role="dialog"
									aria-labelledby="hmodelquote">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
												<div class="model-icon">
													<i class="lnr lnr-apartment"></i>
												</div>
												<div class="model-divider">
													<div class="model-title">
														<p>Don’t Hesitate To ask</p>
														<h6>rquest a quote</h6>
													</div>
												</div>
											</div>
											<!-- .model-header end -->
											<div class="modal-body">
												<form id="head-quote-form" action="../assets/php/sendheadquote.php"
													method="post">
													<input type="text" class="form-control" name="quote-name"
														id="quote-name" placeholder="Your Name" required />
													<input type="email" class="form-control" name="quote-email"
														id="quote-email" placeholder="Email" required />
													<input type="text" class="form-control" name="quote-telephone"
														id="quote-telephone" placeholder="Telephone" required />
													<textarea class="form-control" name="quote-message"
														id="quote-message" placeholder="Quote Details" rows="2"
														required></textarea>
													<button type="submit"
														class="btn btn-primary btn-black btn-block">Submit
														Inquiry</button>
													<!--Alert Message-->
													<div id="head-quote-result" class="mt-xs">
													</div>
												</form>
											</div>
											<!-- .model-body end -->
										</div>
									</div>
								</div>
								<!-- .model-quote end -->
							</li>
						</ul>
					</div>
					<!-- .col-md-6 end -->
				</div>
			</div>
		</div>
		<nav id="primary-menu" class="navbar navbar-fixed-top style-1">
			<div class="row">
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
						<a class="logo" href="home-2.html">
							<img src="../assets/mian-logo.jpg" alt="Yellow Hats">
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left">
							<li class="has-dropdown active">
							<a href="home-2.html">Home</a>
							</li>
							<!-- li end -->
							<li class="has-dropdown">
								<a href="about-2.html">about</a>
							</li>
							<!-- li end -->
							<li class="has-dropdown">
								<a href="#" data-toggle="dropdown" class="dropdown-toggle">services</a>
								<ul class="dropdown-menu">
									<li>
										<a href="custom-glove.html">Custom Gloves</a>
									</li>
									<li>
										<a href="services-blocks.html">Authentication</a>
									</li>

									<li>
										<a href="pricing.html">Glove Restoration</a>
									</li>
								</ul>
							</li>
							<!-- li end -->
							<li class="has-dropdown">
								<a href="#" data-toggle="dropdown" class="dropdown-toggle">products</a>
								<ul class="dropdown-menu">
									<li class="dropdown-submenu">
										<a href="Industrial-gloves.html" >industerialzgloves</a>
									</li>
									<li class="dropdown-submenu">
										<a href="#" >fancy gloves</a>
								</ul>
							</li>
							<!-- li end -->
							<li class="has-dropdown">
								<a href="blog-grid-full-width.html">blog</a>
								<ul class="dropdown-menu">
									<li class="dropdown-submenu">
										<a href="#" data-toggle="dropdown" class="dropdown-toggle">grid</a>
									</li>

								</ul>
							</li>
							<!-- li end -->
							<li class="has-dropdown">
								<a href="faq.html">FAQS</a>
							</li>
							<!-- li end -->
							<li class="has-dropdown pull-left">
								<a href="contact-1.html">contact us</a>

							</li>
							<!-- li end -->
						</ul>

						<!-- Mod-->
						<div class="module module-search pull-left">
							<div class="search-icon">
								<i class="fa fa-search"></i>
								<span class="title">search</span>
							</div>
							<div class="search-box">
								<form class="search-form">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Type Your Search Words">
										<span class="input-group-btn">
											<button class="btn" type="button"><i class="fa fa-search"></i></button>
										</span>
									</div>
									<!-- /input-group -->
								</form>
							</div>
						</div>
						<!-- .module-search-->
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</div>
		</nav>
	</header>
<section class="bg-overlay bg-overlay-gradient pb-0">
	<div class="bg-section" >
		<img src="../assets/images/page-title/2.jpg" alt="Background"/>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="page-title title-1 text-center">
					<div class="title-bg">
						<h2>Fancy Gloves</h2>
					</div>
				</div>
				<!-- .page-title end -->
			</div>
			<!-- .col-md-12 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>


<!-- Projects
============================================= -->
<section id="projects" class="projects-grid projects-4col">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="heading heading-3 mb-0 text-center">
					<div class="heading-bg">
						<p class="mb-0">Great &amp; Awesome Works</p>
						<h2>Our Products</h2>
					</div>
				</div>
				<!-- .heading end -->
			</div>
			<!-- .col-md-12 end -->
		</div>
		<!-- .row end -->
		<div class="row">
			
			<!-- Projects Filter
					============================================= -->
			<div class="col-xs-12 col-sm-12 col-md-12 projects-filter">
				<ul class="list-inline">
					<li>
						<a class="active-filter" href="#" data-filter="*">All Products</a>
					</li>
					<li>
						<a href="#" data-filter=".Base-Ball">Base-Ball</a>
					</li>
					<li>
						<a href="#" data-filter=".Horse-Ridding">Horse-Ridding</a>
					</li>
					<li>
						<a href="#" data-filter=".Cycling"> Cycling</a>
					</li>
					<li>
						<a href="#" data-filter=".Driving">Driving</a>
					</li>
					<li>
						<a href="#" data-filter=".Fitness">Fitness</a>
					</li>
				</ul>
			</div>
			<!-- .projects-filter end -->
		</div>
		<!-- .row end -->
		<!-- Projects Item
			============================================= -->
		<div id="projects-all" class="row">
<?php if ($ResulT->rowCount() > 0) {
 while ($row = $ResulT->fetch(PDO::FETCH_ASSOC)) {

?>
			<!-- Project Item #1 -->
			<div class="col-xs-12 col-sm-6 col-md-3 project-item <?php echo $row['category_name'] ?>">
                    <div class="project-img">
                        <img class="img-responsive" src="data:image/jpeg;base64,<?php echo base64_encode($row['image_url']); ?>"
                            alt="<?php echo $row['product_name'] ?>" />
                        <div class="project-hover">
                            <form action="../assets/php/updation_2.php" method="post" enctype="multipart/form-data">
                                <div class="project-meta">
                                    <input type="hidden" name="product_id" value="<?php echo $row['id'] ?>">
                                    <h6>
                                        <label for="">Product For</label>
                                        <input style="color: rgb(0, 0, 0);" type="text"
                                            value="<?php echo $row['description'] ?>" name="u_for" id="">
                                    </h6>
                                    <h4>
                                        <label for="">Product Name</label>
                                        <input style="color: rgb(0, 0, 0);" type="text"
                                            value="<?php echo $row['product_name'] ?>" name="u_name" id="">
                                    </h4>
                                    <input type="file" name="image">
                                    <button type="submit" class="btn btn-light">Update Product</button>
                                </div>
                            </form>
                            <div class="project-zoom">
                                <form action="../assets/php/f-product-del.php" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this product?');">
                                    <input type="hidden" name="product_id" value=" <?php echo $row['id']; ?>" />
                                    <button style="margin-bottom: -100px;" type="submit" class="btn btn-danger">Delete</button>
                                </form>

                            </div>
                        </div>
                        <!-- .project-hover end -->
                    </div>
                    <!-- .project-img end -->

                </div>
			<!-- .project-item end -->	
			<?php		}



}else{
	echo "Data not found";
}
?>

		</div>


		<!-- .row end -->
		
		
	</div>
	<!-- .container end -->
	
</section>

<!-- Call To Action #1
============================================= -->
<section id="cta-1" class="cta pb-0">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="cta-1 bg-theme">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-1 hidden-xs">
							<div class="cta-img">
								<img src="../assets/images/call/cta-1.png" alt="cta">
							</div>
						</div>
						<!-- .col-md-2 end -->
						<div class="col-xs-12 col-sm-12 col-md-7 cta-devider text-center-xs">
							<div class="cta-desc">
								<p>Have Any Questions !</p>
								<h5>Don’t Hesitate To Contact Us ANy Time.</h5>
							</div>
						</div>
						<!-- .col-md-7 end -->
						<div class="col-xs-12 col-sm-12 col-md-2 pull-right pull-none-xs">
							<div class="cta-action">
								<a class="btn btn-secondary" href="contact-1.html">contact us</a>
							</div>
						</div>
						<!-- .col-md-2 end -->
					</div>
				</div>
				<!-- .cta-1 end -->
			</div>
			<!-- .col-md-12 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #cta-1 end -->
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
								<p class="text-capitalize font-heading">tanta , alGharbia, egypt.</p>
							</div>
						</div>
						<!-- .widget end -->
						<div class="col-xs-12 col-sm-12 col-md-4 widget">
							<div class="widget-contact-icon pull-left">
								<i class="lnr lnr-envelope"></i>
							</div>
							<div class="widget-contact-info">
								<p class="text-capitalize text-white">email us</p>
								<p class="text-capitalize font-heading">7oroof@7oroof.com</p>
							</div>
						</div>
						<!-- .widget end -->
						<div class="col-xs-12 col-sm-12 col-md-4 widget">
							<div class="widget-contact-icon pull-left">
								<i class="lnr lnr-phone"></i>
							</div>
							<div class="widget-contact-info">
								<p class="text-capitalize text-white">call us</p>
								<p class="text-capitalize font-heading">002 01065370701</p>
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
						<img src="../assets/images/footer-logo.png" alt="logo"/>
					</div>
					<div class="widget-about-info">
						<h5 class="text-capitalize text-white">yellow hats</h5>
						<p class="mb-0">Yellow Hats is a leading of A-grade commercial, industrial and residential projects in USA. Since its foundation the company has doubled its turnover year on year, with its staff numbers swelling accordingly.</p>
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
									<a href="#"> design &amp; build</a>
								</li>
								<li>
									<a href="#"> tiling &amp; painting</a>
								</li>
								<li>
									<a href="#"> revonations</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4">
							<ul class="list-unstyled text-capitalize">
								<li>
									<a href="#"> management</a>
								</li>
								<li>
									<a href="#"> wood flooring</a>
								</li>
								<li>
									<a href="#"> work consulting</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4">
							<ul class="list-unstyled text-capitalize">
								<li>
									<a href="#"> wood flooring</a>
								</li>
								<li>
									<a href="#"> green building</a>
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
						<a href="#" >
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
				<p class="text-capitalize">© 2016 - 2017 yellow hats. all rights reserved</p>
				<p class="text-capitalize">With Love by
					<a href="http://themeforest.net/user/7oroof/portfolio?ref=7oroof">7oroof.com</a>
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
</body>
</html>