<?php
include 'assets/php/config.php'; // Include the database connection configuration

try {
    $stmt = $conn->prepare("SELECT * FROM blogs");
    $stmt->execute();
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
<link href="assets/images/favicon/favicon.ico" rel="icon">

<!-- Fonts
============================================= -->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:100,200,300,400,500,600,700,800%7CDroid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- Stylesheets
============================================= -->
<link href="assets/css/external.css" rel="stylesheet">
<!-- Extrnal CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Boostrap Core CSS -->
<link href="assets/css/style.css" rel="stylesheet">
<!-- Style CSS -->

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
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
						<a class="logo" href="index.html">
							<img src="assets/mian-logo.jpg" alt="Yellow Hats">
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left">
							<li class="has-dropdown ">
								<a href="index.html">Home</a>
							</li>
							<!-- li end -->
							<li class="has-dropdown">
								<a href="about.html">about</a>
							</li>
							<!-- li end -->
							<li class="has-dropdown">
								<a href="#" data-toggle="dropdown" class="dropdown-toggle">services</a>
								<ul class="dropdown-menu">
									<li>
										<a href="custom-glove.html">Custom Gloves</a>
									</li>
									<li>
										<a href="Glove Restoration.html">Glove Restoration</a>
									</li>
								</ul>
							</li>
							<!-- li end -->
							<li class="has-dropdown">
								<a href="#" data-toggle="dropdown" class="dropdown-toggle">products</a>
								<ul class="dropdown-menu">
									<li class="dropdown-submenu">
										<a href="Industrial-gloves.php">industerialgloves</a>
									</li>
									<li class="dropdown-submenu">
										<a href="fancy gloves.php">Sports gloves</a>

									</li>

								</ul>
							</li>
							<li class="has-dropdown active">
								<a href="blog.php">blog</a>
							</li>
							<!-- li end -->
							<li class="has-dropdown">
								<a href="faq.html">FAQS</a>
							</li>
							<!-- li end -->
							<li class="has-dropdown pull-left">
								<a href="contact.html">contact us</a>

							</li>
							<!-- li end -->
						</ul>

						
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</div>
		</nav>
</header>
<!-- Page Title
============================================= -->
<section class=" bg-overlay bg-overlay-gradient pb-0">
	<div class="bg-section" >
		<img src="assets/images/blog/main-glove-2-b.jpg" alt="Background"/>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="page-title title-1 text-center">
					<div class="title-bg">
						<h2>Blog &amp; News</h2>
					</div>
					<ol class="breadcrumb">
						<li>
							<a href="index.html">Home</a>
						</li>
						<li class="active">Blog</li>
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

<!-- Blogs
============================================= -->
<section>
    <div class="container">
        <div class="row">
            <?php 
            // Fetching blogs
            $blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach($blogs as $blog) {
            ?>
            <!-- Entry Article -->
            <div class="col-xs-12 col-sm-6 col-md-4 entry">
                <div class="entry-img">
                    <?php if (!empty($blog['image'])): ?>
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($blog['image']); ?>" alt="<?php echo htmlspecialchars($blog['title']); ?>" />
                    <?php else: ?>
                        <img src="path/to/default/image.jpg" alt="Default Image" /> <!-- Fallback image -->
                    <?php endif; ?>
                </div>
                <!-- .entry-img end -->
                <div class="entry-meta clearfix">
                    <ul class="text-right">
                        <li class="entry-cat">In:<span><a href="#"><?php echo htmlspecialchars($blog['title']); ?></a></span></li>
                        <li class="entry-no-comments"><i class="fa fa-comments"></i> 17</li>
                        <li class="entry-views"><i class="fa fa-eye"></i> 40</li>
                    </ul>
                </div>
                <!-- .entry-meta end -->
                <div class="entry-title">
                    <h3>
                        <a href="full-blog.php?id=<?php echo $blog['id']; ?>"><?php echo htmlspecialchars($blog['excerpt']); ?></a> <!-- Link to full blog -->
                    </h3>
                </div>
                <!-- .entry-title end -->
                <div class="entry-content">
                    <p><?php echo htmlspecialchars($blog['content']); ?></p>
                    <a class="entry-more" href="full-blog.php?id=<?php echo $blog['id']; ?>"><i class="fa fa-plus"></i>
                        <span>read more</span>
                    </a>
                </div>
                <!-- .entry-content end -->
            </div>
            <!-- .entry end -->
            <?php 
            }
		}catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
		}
            ?>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-secondary" href="#">loading more</a>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>

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
						<img src="assets/images/footer-logo.png" alt="logo"/>
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
<script src="assets/js/jquery-2.1.1.min.js"></script>
<script src="assets/js/plugins.js?v=1.0.0"></script>
<script src="assets/js/functions.js?v=1.2.0"></script>
</body>
</html>