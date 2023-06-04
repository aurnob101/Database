<?php
session_start();

?>




<!DOCTYPE html>
<html>
<head>
	<title>cusas-gallery</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.rateyo.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" />
	<link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="page" class="site">
		<header class="site-header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<div class="top-header-block">
							<a href="mailto:info@cusas.com"><i class="fas fa-envelope"></i> info@cusas.com</a>
						</div>
						<div class="top-header-block">
							<a href="tel:+8801685-530730"><i class="fas fa-phone"></i> +8801685-530730</a>
						</div>
					</div>
					
						<div class="login-block">
							<a href="login.php">Login /</a>
							<a href="register.php">Register</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Top header Close -->
			<div class="main-header">
				<div class="container">
					<div class="logo-wrap">
						<img src="images/cu_logo.jpg" alt="Logo Image">
					</div>
					<div class="nav-wrap">
						<nav class="nav-desktop">
							<ul class="menu-list">
								<li><a href="index.php">Home</a></li>
								
								<li><a href="about.php">About</a></li>
								<li><a href="gallery2.php">Gallery</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
						<div id="bar">
							<i class="fas fa-bars"></i>
						</div>
						<div id="close">
							<i class="fas fa-times"></i>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Close -->
		<div class="banner">
			<div class="owl-four owl-carousel">
				<img src="images/back_img.jpeg" alt="Image of Bannner">
				<img src="images/pic_5.jpg" alt="Image of Bannner">
				<img src="images/back_img2.jpeg" alt="Image of Bannner">
			</div>
			<div class="container">
				<h1>Welcome to CUSAS-Chittagong University Smart Attendance System</h1>
				<h3>"Say goodbye to manual time-keeping and hello to a smarter, more efficient future with a smart attendance system."</h3>
			</div>
			 <div id="owl-four-nav" class="owl-nav"></div>
		</div>
		

		<section class="gallery-section2">
			<div class="container">
				<div id="filters" class="button-group">
					
			</div>
				<section class="gallery-images-section gallery2" id="cGrid">
					<div class="gallery-img-wrap grid-item business" data-category="business">
						<a href="images/gallery-img1.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img1.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item business" data-category="business">
						<a href="images/gallery-img2.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img2.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item design" data-category="design">
						<a href="images/gallery-img3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img3.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item design" data-category="design">
						<a href="images/gallery-img4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img4.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item development" data-category="development">
						<a href="images/gallery-img5.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img5.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item design" data-category="design">
						<a href="images/gallery-img6.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img6.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item seo" data-category="seo">
						<a href="images/gallery-img7.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img7.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item marketing" data-category="marketing">
						<a href="images/gallery-img8.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img8.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item seo" data-category="seo">
						<a href="images/gallery-img9.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img9.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item seo" data-category="seo">
						<a href="images/gallery-img10.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img10.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item seo" data-category="seo">
						<a href="images/gallery-img11.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img11.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item seo" data-category="seo">
						<a href="images/gallery-img12.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="images/gallery-img12.jpg" alt="gallery-images">
						</a>
					</div>
				</section>
				<!-- End of gallery Images -->				
		</section>
		<section class="query-section">
			<div class="container">
				<p>Any Queries? Ask us a question at<a href="tel:+8801685-530730"><i class="fas fa-phone"></i> +8801685-530730</a></p>
			</div>
		</section>
		<!-- End of Query Section -->
		<footer class="page-footer">
			<div class="footer-first-section">
				<div class="container">
					<div class="box-wrap">
						<header>
							<h1>about</h1>
						</header>
						<p>We believe in the power of data and the impact it can have on organizations of all sizes. Our solutions are flexible, 
							scalable, and designed to meet the evolving needs of your business.</p>

						<h4><a href="tel:+8801685-530730"><i class="fas fa-phone"></i> +8801685-530730</a></h4>
						<h4><a href="mailto:info@cusas.com"><i class="fas fa-envelope"></i> info@cusas.com</a></h4>
						<h4><i class="fas fa-map-marker-alt"></i>University of Chittagong, Chittagong, Bnagladesh.</h4>
					</div>

			

				</div>
			</div>
			<!-- End of box-Wrap -->
			<div class="footer-second-section">
				<div class="container">
					<hr class="footer-line">
					<ul class="social-list">
						<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-skype"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
						<li><a href=""><i class="fab fa-instagram"></i></a></li>
					</ul>
					<hr class="footer-line">
				</div>
			</div>
			<div class="footer-last-section">
				<div class="container">
					<p>Copyright 2023 &copy; arrr.cu.bd.com <span> | </span> Theme designed and developed by <a href="https://ARRR LAB">ARRR LAB</a></p>
				</div>
			</div>
		</footer>
	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>

