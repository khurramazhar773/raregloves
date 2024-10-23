<?php
include 'assets/php/config.php'; // Include the database connection configuration

try {
    $stmt = $conn->prepare("SELECT * FROM blogs");
    $stmt->execute();
?>

<?php include 'header.php'; ?><body>
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

<?php include 'footer.php'; ?>