<?php
include 'assets/php/config.php';

try {
    $stmt = $conn->prepare("SELECT p.product_name, p.description, p.image_url, c.category_name 
        FROM products_2 p 
        JOIN categories_2 c ON p.category_id = c.id");
    $stmt->execute();

	$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
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

	<?php include 'nav.php' ?>;

	<section class="bg-overlay bg-overlay-gradient pb-0">
		<div class="bg-section">
			<img src="assets/images/page-title/2.jpg" alt="Background" />
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
				<?php 
		foreach($products as $row){
		?>
				<!-- Project Item #1 -->
				<div class="col-xs-12 col-sm-6 col-md-3 project-item <?php echo $row['category_name'] ?>">
					<div class="project-img">
						<img class="img-responsive"
							src="data:image/jpeg;base64,<?php echo base64_encode($row['image_url']); ?>"
							alt="<?php echo $row['product_name'] ?>" />
						<div class="project-hover">
							<div class="project-meta">
								<h6>
									<?php echo $row['description'] ?>
								</h6>
								<h4>
									<a href="#">
										<?php echo $row['product_name'] ?>
									</a>
								</h4>
							</div>
							<div class="project-zoom">
								<a class="img-popup" href="assets/images/projects/full/15.jpg"
									title="New Office Room"><i class="fa fa-plus"></i></a>
							</div>
						</div>
						<!-- .project-hover end -->
					</div>
					<!-- .project-img end -->

				</div>
				<!-- .project-item end -->
				<?php
		} 
            }
		catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
		}
            ?>
		</div>

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
									<img src="assets/images/call/cta-1.png" alt="cta">
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
	<?php include 'footer.php'; ?>