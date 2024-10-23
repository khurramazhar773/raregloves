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
	<header id="navbar-spy" class="full-header header-3">
	<nav id="primary-menu" class="navbar navbar-fixed-top style-1">
		<div id="top-bar" style="border-bottom : 1px solid rgba(151, 151, 151, 0.281);" class="top-bar hidden-xs">
			<div class="">
				<div class="topy">
					
					<div class="top-contact text-left">
						<ul class="list-inline top-contact">
							<li style="border-right : 1px solid rgba(151, 151, 151, 0.281);" >
								<p>Phone:
									<span>+ 2 0106 5370701</span>
								</p>
							</li>
							<li>
								<p>Email:
									<span>7oroof@7oroof.com</span>
								</p>
							</li>
							
						</ul>
					</div>
					<!-- .col-md-6 end -->
					<div class="col-xs-12 col-sm-4 col-md-4">
						<ul class="list-inline d-flex top-widget">
							<li class="top-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-vimeo"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-rss"></i></a>
							</li>
							<li>
								<a class="button-quote" href="#" data-toggle="modal" data-target="#model-quote" id="modelquote">Get A Quote</a>
								<!-- Modal -->
								<div class="modal fade model-quote" id="model-quote" tabindex="-1" role="dialog" aria-labelledby="modelquote">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
												<form id="pop-quote-form" action="assets/php/quot.php" method="post">
													<input type="text" class="form-control" name="quote-name" id="name" placeholder="Your Name" required/>
													<input type="email" class="form-control" name="quote-email" id="email" placeholder="Email" required/>
													<input type="text" class="form-control" name="quote-telephone" id="telephone" placeholder="Telephone" required/>
													<textarea class="form-control" name="quote-message"  id="quote" placeholder="Quote Details" rows="2" required></textarea>
													<button type="submit" name="submit" class="btn btn-primary btn-black btn-block">Submit Inquiry</button>
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
				</div>
			</div>
		</div>
		<div class="row">
			<div class="container under-nav">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="logo" href="index.php">
						<img style="border-radius: 200px;" src="assets/mian-logo.jpg" alt="Yellow Hats">
					</a>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse nav-btn-d navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left">
						<li class="has-dropdown active">
							<a style="color: #303030;" href="index.php">Home</a>
						</li>
						<!-- li end -->
						<li class="has-dropdown">
							<a style="color: #303030;" href="about.php">about</a>
						</li>
						<!-- li end -->
						<li class="has-dropdown">
							<a style="color: #303030;" href="#" data-toggle="dropdown" class="dropdown-toggle">services</a>
							<ul class="dropdown-menu">
								<li>
									<a href="custom-glove.php">custom glove</a>
								</li>
								<li>
									<a href="Glove-Restoration.php">glove restoration</a>
								</li>
							</ul>
						</li>
						<!-- li end -->
						<li class="has-dropdown">
							<a style="color: #303030;" href="#" data-toggle="dropdown" class="dropdown-toggle">products</a>
							<ul class="dropdown-menu">
							<li>
											<a href="Industrial-gloves.php">Industrial glove</a>
										</li>
										<li>
											<a href="fancy-gloves.php">sports glove</a>
										</li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a style="color: #303030;" href="blog.php">blog</a>
						</li>
						<li class="has-dropdown pull-left">
							<a style="color: #303030;" href="contact.php">contact</a>
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
	<?php 
		// include 'nav.php';
		 ?>

	<!-- Hero #2
============================================= -->
	<section id="hero-2" class="hero-2">
		<video autoplay loop muted class="hero-sec-bg" src="assets/images/Dental Surgery .mp4"></video>
		<div class="hero-content">
			<h1>Rare Gloves Industries</h1>
			<p class="mb-0 text-center mt-m">
				Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem ut, molestiae veniam accusantium
				provident quia vitae cumque corrupti dicta, voluptates quos, magnam facilis rem id nemo!
			</p>
			<br>
			<a class="btn btn-primary btn-white-h mt-md" id="request-btn" href="#" data-toggle="modal"
				data-target="#model-quote" id="modelquote">request a quote</a>
		</div>
	</section>

	<!-- Call To Action #2
============================================= -->
	<section id="cta-2" class="cta pb-0 pt-0">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="cta-2 bg-theme">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-7">
								<div class="cta-icon">
									<i class="lnr lnr-apartment"></i>
								</div>
								<div class="cta-devider">
								</div>
								<div class="cta-desc">
									<p>Have Any Questions !</p>
									<h5>Don’t Hesitate To Contact Us ANy Time.</h5>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-5 cta-action text-right pull-right pull-none-xs">
								<a class="btn btn-primary btn-white mr-sm" href="#" data-toggle="modal"
									data-target="#model-quote" id="modelquote">rquest a quote</a>
								<a class="btn btn-secondary" href="contact-1.html">contact us</a>
								<!-- Modal -->
								<div class="modal fade model-quote" id="model-quote" tabindex="-1" role="dialog"
									aria-labelledby="modelquote">
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
												<form id="pop-quote-form" action="assets/php/sendpopquote.php"
													method="post">
													<input type="text" class="form-control" name="quote-name" id="name"
														placeholder="Your Name" required />
													<input type="email" class="form-control" name="quote-email"
														id="email" placeholder="Email" required />
													<input type="text" class="form-control" name="quote-telephone"
														id="telephone" placeholder="Telephone" required />
													<textarea class="form-control" name="quote-message" id="quote"
														placeholder="Quote Details" rows="2" required></textarea>
													<button type="submit"
														class="btn btn-primary btn-black btn-block">Submit
														Inquiry</button>
													<!--Alert Message-->
													<div id="pop-quote-result" class="mt-xs">
													</div>
												</form>
											</div>
											<!-- .model-body end -->
										</div>
									</div>
								</div>
								<!-- .model-quote end -->
							</div>
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
	<!-- #cta-2 end -->

	<!-- Service Block #1
============================================= -->
	<section id="service-1" class="service service-1">
		<div class="">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
					<div class="heading heading-2 text-center">
						<div class="heading-bg">
							<p class="mb-0">what we can do ?</p>
							<h2>our Products</h2>
						</div>
						<p class="mb-0 mt-md">The rare gloves industry refers to a niche market that focuses on the
							production, collection, and sale of unique, high-quality, or historically significant
							gloves. This industry caters to both functional and luxury needs, offering gloves for
							various purposes, including fashion, sports, collectibles, and specialized work
							environments. The industry is characterized by its emphasis on craftsmanship, materials, and
							exclusivity, often appealing to collectors, fashion enthusiasts, or professionals who
							require specialized handwear</p>
					</div>
					<!-- .heading end -->
				</div>
				<!-- .col-md-6 end -->
			</div>
			<!-- .row end -->
			<div class="all-cards row">
				<!-- Service Block #2 -->
				<div class="mycard">
					<div class=" cimg">
						<img src="assets/images/services/doctor-glove.jpeg" alt="service">
					</div>
					<div class=" cdetail">
						<h2>Nylon</h2>
						<p style="color: #fff;">Offer specialized services to help collectors, enthusiasts, or companies
							find rare,
							vintage, or hard-to-find gloves. This can include personalized glove searches,
							verification, and delivery.</p>
						<a class="read-more" href="custom-glove.html"><i class="fa fa-plus"></i>
							<span>read more</span>
						</a>
					</div>
				</div>
				<!-- Service Block #2 -->
				<div class="mycard">
					<div class=" cimg">
						<img src="assets/images/services/main-glove-5_371x247.jpeg" alt="service">
					</div>
					<div class=" cdetail">
						<h2>Cotton</h2>
						<p style="color: #fff;">Offer specialized services to help collectors, enthusiasts, or companies
							find rare,
							vintage, or hard-to-find gloves. This can include personalized glove searches,
							verification, and delivery.</p>
						<a class="read-more" href="custom-glove.html"><i class="fa fa-plus"></i>
							<span>read more</span>
						</a>
					</div>
				</div>
				<!-- Service Block #2 -->
				<div class="mycard">
					<div class=" cimg">
						<img src="assets/images/services/main-glove-3_371x247 (1).jpeg" alt="service">
					</div>
					<div class=" cdetail">
						<h2>leather</h2>
						<p style="color: #fff;">Offer specialized services to help collectors, enthusiasts, or companies
							find rare,
							vintage, or hard-to-find gloves. This can include personalized glove searches,
							verification, and delivery.</p>
						<a class="read-more" href="custom-glove.html"><i class="fa fa-plus"></i>
							<span>read more</span>
						</a>
					</div>
				</div>
			</div>
			<!-- .row end -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 text-center">
					<a class="btn btn-secondary mt-50" href="#">All Services <i class="fa fa-plus ml-xs"></i></a>
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>

	<!-- Shortcode #5 
============================================= -->
	<section id="shortcode-5" class="shortcode-5 pb-50">

		<div class="container">
			<div class="row">
				<div class="col-12-12 col-sm-12 col-md-6 col-md-offset-3">
					<div class="heading heading-2 text-center">
						<div class="heading-bg">
							<p class="mb-0">all about me</p>
							<h2>my stroy</h2>
						</div>
						<p class="mb-0">Rare Gloves is a leading developer of A-grade commercial, industrial and
							Glove Manufacturing projects in USA. Since its foundation the company has doubled its
							turnover year
							on year, with its staff numbers swelling accordingly.</p>
					</div>

					<!-- .heading end -->
				</div>

			</div>
			<!-- .row end -->
			<div class="flex-class row">
				<video src="assets/images/Cinematic Industrial Foundry 4K.mp4" autoplay loop muted
					class="about-bg"></video>
				<div class="col-12-12">
					<div class="main-about-left">
						<h1 class="text-uppercase">Contrary to popular belief,</h1>
						<p>Rare GLoves has a cutting edge quality management system which ensures high quality standards
							at all sites.</p>
					</div>
				</div>
				<div class="col-12-12 col-sm-4 col-md-6">
					<div class="panel-group accordion" id="accordion02" role="tablist" aria-multiselectable="true">

						<!-- Panel 01 -->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a class="accordion-toggle" role="button" data-toggle="collapse"
										data-parent="#accordion02" href="#collapse02-1" aria-expanded="true"
										aria-controls="collapse02-1"> About Rare Gloves </a>
									<span class="icon"></span>
								</h4>
							</div>
							<div id="collapse02-1" class="panel-collapse collapse in" role="tabpanel"
								aria-labelledby="headingOne">
								<div class="panel-body">
									Since its foundation the company has doubled its turnover year on year, with its
									staff numbers swelling accordingly.
								</div>
							</div>
						</div>

						<!-- Panel 02 -->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="accordion-toggle collapsed" role="button" data-toggle="collapse"
										data-parent="#accordion02" href="#collapse02-2" aria-expanded="false"
										aria-controls="collapse02-2"> Our Mission </a>
								</h4>
							</div>
							<div id="collapse02-2" class="panel-collapse collapse" role="tabpanel"
								aria-labelledby="headingTwo">
								<div class="panel-body">
									We do only what we are great on, including third-party liabilities, thus
									indemnifying our clients against all risks.
								</div>
							</div>
						</div>

						<!-- Panel 03 -->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="accordion-toggle collapsed" role="button" data-toggle="collapse"
										data-parent="#accordion02" href="#collapse02-3" aria-expanded="false"
										aria-controls="collapse02-3"> Our Goals </a>
								</h4>
							</div>
							<div id="collapse02-3" class="panel-collapse collapse" role="tabpanel"
								aria-labelledby="headingThree">
								<div class="panel-body">
									Since its foundation the company has doubled its turnover year on year, with its
									staff numbers swelling accordingly & it will continue to do so.
								</div>
							</div>
						</div>
					</div>
					<!-- End .Accordion-->
				</div>

			</div>
		</div>
	</section>


	<!-- Call To Action #3
============================================= -->
	<section id="cta-3" class="cta cta-3 bg-overlay bg-overlay-theme text-center">
		<div class="bg-section">
			<!-- <img src="assets/images/call/2.jpg" alt="Background" /> -->
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
					<h2>Quality Comes First</h2>
					<p>At "Rare Gloves Industries", quality comes first. Our rare gloves are carefully sourced, ensuring
						each pair meets the highest standards of craftsmanship and authenticity. From vintage pieces to
						unique collector's items, we meticulously examine every glove for durability, material
						integrity, and historical significance.</p>
					<div class="signiture">
						<img src="assets/images/call/sign.png" alt="signiture" />
					</div>
				</div>
				<!-- .col-md-8 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
	<!-- #cta-3 end -->


	<!-- Testimonials #1
============================================= -->
	<section id="testimonials" class="testimonial testimonial-1 bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="heading heading-3 text-center">
						<div class="heading-bg">
							<p class="mb-0">what people say ?</p>
							<h2>testimonials</h2>
						</div>
					</div>
					<!-- .heading end -->
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div id="testimonial-oc" class="testimonial-carousel">

						<!-- testimonial item #1 -->
						<div class="testimonial-item">
							<div class="testimonial-content">
								<div class="testimonial-img">
									<i class="fa fa-quote-left"></i>
									<img src="assets/images/testimonial/3.png" alt="author" />
								</div>
								<p>The company’s experts have accumulated valuable experience in green development,
									being savvy to all aspects of the certification process and requirements.</p>
							</div>
							<div class="testimonial-divider">
							</div>
							<div class="testimonial-meta">
								<strong>Begha</strong>, Art Director
							</div>
						</div>
						<!-- .testimonial-item end -->

						<!-- testimonial item #2 -->
						<div class="testimonial-item">
							<div class="testimonial-content">
								<div class="testimonial-img">
									<i class="fa fa-quote-left"></i>
									<img src="assets/images/testimonial/2.png" alt="author" />
								</div>
								<p>The skills of our project managers are attested by international certificates from
									leading overseas professional associations in the realm of construction, land use
									and real estate. </p>
							</div>
							<div class="testimonial-divider">
							</div>
							<div class="testimonial-meta">
								<strong>Habaza</strong>, Civil Engineer
							</div>
						</div>
						<!-- .testimonial-item end -->

						<!-- testimonial item #3 -->
						<div class="testimonial-item">
							<div class="testimonial-content">
								<div class="testimonial-img">
									<i class="fa fa-quote-left"></i>
									<img src="assets/images/testimonial/1.png" alt="author" />
								</div>
								<p>Yellow Hats Group carries out full-cycle development, including the attraction of
									investments, construction and managing premium residential and non-residential
									properties.</p>
							</div>
							<div class="testimonial-divider">
							</div>
							<div class="testimonial-meta">
								<strong>Fouad Badawy</strong>, Investor
							</div>
						</div>
						<!-- .testimonial-item end -->

						<!-- testimonial item #4 -->
						<div class="testimonial-item">
							<div class="testimonial-content">
								<div class="testimonial-img">
									<i class="fa fa-quote-left"></i>
									<img src="assets/images/testimonial/3.png" alt="author" />
								</div>
								<p>The skills of our project managers are attested by international certificates from
									leading overseas professional associations in the realm of construction, land use
									and real estate.</p>
							</div>
							<div class="testimonial-divider">
							</div>
							<div class="testimonial-meta">
								<div class="testimonial-name">
									<strong>AYMAN FIKRY</strong>, Civil Engineer
								</div>
							</div>
						</div>
						<!-- .testimonial-item end -->

						<!-- testimonial item #5 -->
						<div class="testimonial-item">
							<div class="testimonial-content">
								<div class="testimonial-img">
									<i class="fa fa-quote-left"></i>
									<img src="assets/images/testimonial/1.png" alt="author" />
								</div>
								<p>Yellow Hats Group carries out full-cycle development, including the attraction of
									investments, construction and managing premium residential and non-residential
									properties.</p>
							</div>
							<div class="testimonial-divider">
							</div>
							<div class="testimonial-meta">
								<strong>Fouad Badawy</strong>, Investor
							</div>
						</div>
						<!-- .testimonial-item end -->

						<!-- testimonial item #6 -->
						<div class="testimonial-item">
							<div class="testimonial-content">
								<div class="testimonial-img">
									<i class="fa fa-quote-left"></i>
									<img src="assets/images/testimonial/2.png" alt="author" />
								</div>
								<p>The skills of our project managers are attested by international certificates from
									leading overseas professional associations in the realm of construction, land use
									and real estate. </p>
							</div>
							<div class="testimonial-divider">
							</div>
							<div class="testimonial-meta">
								<strong>Habaza</strong>, Civil Engineer
							</div>
						</div>
						<!-- .testimonial-item end -->

					</div>
				</div>
				<!-- .col-md-12 end -->

			</div>
			<!-- .row end -->

		</div>
		<!-- .container end -->

	</section>
	<!-- #testimonials end -->

	<!-- Shortcode #9 
============================================= -->
	<!-- Shortcode #4 
============================================= -->
	<section id="shortcode-4" class="shortcode-4  counter-bg">
		<div class="container text-center">
			<div class="row">

				<!-- Section Body
			============================================= -->
				<div class="col-xs-12 col-sm-3 col-md-3">
					<div class="facts-box">
						<div class="counter">
							5000
						</div>
						<h4 class="text-uppercase">products order</h4>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<div class="facts-box">
						<div class="counter">
							1325
						</div>
						<h4 class="text-uppercase">Workers Employed</h4>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<div class="facts-box">
						<div class="counter">
							321
						</div>
						<h4 class="text-uppercase">quality Awards</h4>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<div class="facts-box last">
						<div class="counter">
							2314
						</div>
						<h4 class="text-uppercase">Happy Customers</h4>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'footer.php'; ?>