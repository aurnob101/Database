<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>CUSAS Home Page</title>
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
	<link rel="stylesheet" type="text/css" href="css/meanmenu.min.css">
	<link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
</head>
<body>
	<div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
		<header class="site-header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<div class="top-header-block">
							<a href="mailto:info@cusas.com" itemprop="email"><i class="fas fa-envelope"></i> info@cusas.com</a>
						</div>
						<div class="top-header-block">
							<a href="tel:+8801685-530730" itemprop="telephone"><i class="fas fa-phone"></i> +8801685-530730</a>
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
					<div class="logo-wrap" itemprop="logo">
						<img src="images/cu_logo.jpg" alt="Logo Image">
						<!-- <h1>Education</h1> -->
					</div>
					<div class="nav-wrap">
						<nav class="nav-desktop">
							<ul class="menu-list">
								<li><a href="index.php">Home</a></li>
								
								
								</li>
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
			<div class="owl-four owl-carousel" itemprop="image">
				<img src="images/pic_5.jpg" alt="Image of Bannner">
				<img src="images/pic_1.jpg" alt="Image of Bannner">
				<img src="images/pic_2.jpg" alt="Image of Bannner">
			</div>
			<div class="container" itemprop="description">
				<h1><p style="color: wite;"font-family:verdana">Welcome to CUSAS- Chittagong University Smart Attendance System</p></h1>
				<h3>"Say goodbye to manual time-keeping and hello to a smarter, more efficient future with a smart attendance system."

				</h3>
			</div>
			 <div id="owl-four-nav" class="owl-nav"></div>
		</div>
		
		<!-- Banner Close -->
		<div class="page-heading">
			<div class="container">
				<h2>cse popular courses</h2>
			</div>
		</div>
		<!-- Popular courses End -->
		<div class="learn-courses">
			<div class="container">
				<div class="courses">
					<div class="owl-one owl-carousel">
						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap" itemprop="image"><img src="images/dbms.jpg" alt="courses picture"></div>
								<a href="#" class="learn-desining-banner" itemprop="name">Learn DBMS >>></a>
							<div class="box-body" itemprop="description">
								<p>The course covers topics such as database design principles, data modeling, Structured Query Language (SQL), 
									data storage and retrieval, database security, and database performance tuning.
									  </p>
								<section itemprop="time">
									<p><span>Duration:</span> 10 Weeks </p>
									<p><span>Class Time:</span> 80 Hours</p>
									<p><span>Period:</span> 40</p>
								</section>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="images/algorithm.jpg" alt="courses picture"></div>
								<a href="#" class="learn-desining-banner" itemprop="name">Learn Algorithm   >>></a>
							<div class="box-body" itemprop="description">
								<p> The course covers topics such as algorithmic complexity analysis, sorting and searching algorithms, graph 
									algorithms, dynamic programming, and greedy algorithms.</p>
								<section itemprop="time">
									<p><span>Duration:</span> 10 Weeks</p>
									<p><span>Class Time:</span> 80 hours</p>
									<p><span>Period:</span> 40</p>
								</section>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="images/micro.png" alt="courses picture"></div>
								<a href="#" class="learn-desining-banner" itemprop="name">Learn Microprocessor >>></a>
							<div class="box-body" itemprop="description">
								<p>The course covers topics such as computer organization and architecture, assembly language programming, memory and input/output (I/O) systems, and interfacing of microprocessors with various devices</p>
								<section itemprop="time">
									<p><span>Duration:</span> 10 Weeks</p>
									<p><span>Class Time:</span> 80 Hours</p>
									<p><span>Period:</span> 40</p>
								</section>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="images/course-pic.jpg" alt="courses picture"></div>
								<a href="#" class="learn-desining-banner" itemprop="name">Learn Numerical >>></a>
							<div class="box-body" itemprop="description">
								<p> The course covers topics such as numerical differentiation and integration, solution of nonlinear equations, optimization, interpolation and extrapolation, and numerical solutions of ordinary and partial differential equations.</p>
								<section itemprop="time">
									<p><span>Duration:</span> 10 Weeks</p>
									<p><span>Class Time:</span> 80 Hours</p>
									<p><span>Period:</span> 40</p>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Learn courses End -->
		

		

		<!-- End of Events section -->
		<section class="what-other-say">
			
			<div class="container">
				<h4 class="article-subtitle">Get to Know</h4>
				<h2 class="head">what our users say</h2>
				<div class="three owl-carousel owl-theme">
					<div class="customer-item" itemscope itemtype="http://schema.org/Rating">
						<div class="border">
						<script>
							$(function () {
  							  $('.rateYo').rateYo({
  						      fullStar: true
 						   });
 							   $('.rateYo').rateYo('rating', 4.5);
							});
						</script>

					<div class="customer">
    					<figure>
       						 <img class="customer-img" src="images/rudra sir.jpg" alt="Person image">
       							 <figcaption>
       							     <span itemprop="author">Rudra Pratap Deb Nath</span>
        							    <div class="rateYo" itemprop="ratingValue" style="display: inline-block;"></div>
       							 </figcaption>
   						 </figure>
										</div>

							<div class="customer-review">
								<p itemprop="description">
									"The interface is user-friendly and the features are exactly what we were looking for.
									 We have seen a noticeable increase in productivity since implementing this solution."
								</p>
							</div>
						</div>
					</div>
					<div class="customer-item" itemscope itemtype="http://schema.org/Rating">
						<div class="border">
							<div class="customer">
								<figure>
									<img class="customer-img" src="images/Abu-Nowshed-Chy.jpg" alt="Person image">
									<figcaption>
										<span itemprop="author">Abu Nowshed Chy</span>
										<div class="rateYo" itemprop="ratingValue"></div>
									</figcaption>
								</figure>
							</div>
							<div class="customer-review">
								<p itemprop="description">
									"I was impressed with the ease of use and customization options available
									 with this database solution. It has saved us time and increased efficiency in our business operations."
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		<section class="query-section">
			<div class="container">
				<p>Any Queries? Ask us a question at<a href="tel:+01685-530730"><i class="fas fa-phone"></i> +8801685-530730</a></p>
			</div>
		</section>
		
		<footer class="page-footer" itemprop="footer" itemscope itemtype="http://schema.org/WPFooter">
			<div class="footer-first-section">
				<div class="container">
					<div class="box-wrap" itemprop="about">
						<header>
							<h1>about</h1>
						</header>
						<p>We believe in the power of data and the impact it can have on organizations of all sizes. Our solutions are flexible, 
							scalable, and designed to meet the evolving needs of your business.</p>

						<h4><a href="tel:+01685-530730"><i class="fas fa-phone"></i> +8801685-530730</a></h4>
						<h4><a href="mailto:info@cusas.com"><i class="fas fa-envelope"></i> info@cusas.com</a></h4>
						<h4><a href=""><i class="fas fa-map-marker-alt"></i>University of Chittagong, Chittagong, Bangladesh.</a></h4>
					</div>

					
					

					

				</div>
			</div>
			
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
					<p>Copyright 2023 &copy; arrr.cu.bd.com <span> | </span> Theme designed and developed by <a href="https:// Arrr Lab">ARRR Lab</a></p>
				</div>
			</div>
		</footer>

		

	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
	<script type="text/javascript" src="js/jquery.meanmenu.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>


	  
</body>

</html>
