<?php
include 'assets/php/config.php'; // Include the database connection configuration

if (isset($_GET['id'])) {
    $blogId = $_GET['id'];

try {
    $stmt = $conn->prepare("SELECT * FROM blogs WHERE id = ?");
    $stmt->execute([$blogId]);
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
	<?php include 'nav.php'; ?>
 <?php 
            // Fetching blogs
            $blog = $stmt->fetch(PDO::FETCH_ASSOC);

            if($blog){
            ?>  
	<!-- Hero #2
============================================= -->
<section id="hero-2" class="hero-2">
    <div class="b_image">
<img style="width: 100%; height: 100%;" src="data:image/jpeg;base64,<?php echo base64_encode($blog['image']); ?>" alt="<?php echo $blog['title']; ?>" />
</div>
</section>



	<!-- Service Block #1
============================================= -->
	<section id="service-1" class="service service-1">
		<div class="">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
					<div class="heading heading-2 text-center">
                            <h1><?php echo $blog['title']; ?></h1>
							<h2><?php echo $blog['excerpt']; ?></h2>
						<p class="mb-0 mt-md"><?php echo $blog['content']; ?></p>
					</div>
					<!-- .heading end -->
				</div>
				<!-- .col-md-6 end -->
			</div>
            <?php 
            }
		}catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
		}
        }else{
            echo "no data found";
        }
            ?>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 text-center">
					<a class="btn btn-secondary mt-50" href="blog.php">More Blogs <i class="fa fa-plus ml-xs"></i></a>
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>

	<?php include 'footer.php'; ?>