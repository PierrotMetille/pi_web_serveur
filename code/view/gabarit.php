<?php 
/**
 * @file    gabarit.php
 * @brief   The header and the footer on the web site
 * @author  Create by Pierrot Métille
 * @version 22.02.2023
 */
?>
<!DOCTYPE html>
	<html>
		<head>
		<?=$title?> 
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="description" content="Sublime project">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
			<link href="content/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
			<link rel="stylesheet" type="text/css" href="content/styles/cart.css">
		</head>
	<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">
			<div class="header_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_content d-flex flex-row align-items-center justify-content-start">
								<div class="logo"><a href="#">Sublime.</a></div>
								<nav class="main_nav">
									<ul>
										<li class="hassubs active">
											<a href="index.html">Home</a>
											<ul>
												<li><a href="categories.html">Categories</a></li>
												<li><a href="product.html">Product</a></li>
												<li><a href="cart.html">Cart</a></li>
												<li><a href="checkout.html">Check out</a></li>
												<li><a href="contact.html">Contact</a></li>
											</ul>
										</li>
										<li class="hassubs">
											<a href="categories.html">Categories</a>
											<ul>
												<li><a href="categories.html">Category</a></li>
												<li><a href="categories.html">Category</a></li>
												<li><a href="categories.html">Category</a></li>
												<li><a href="categories.html">Category</a></li>
												<li><a href="categories.html">Category</a></li>
											</ul>
										</li>
										<li><a href="#">Accessories</a></li>
										<li><a href="#">Offers</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</nav>								</div>
									<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<?=$content?> 

		<!-- Footer -->
		
		<div class="footer_overlay"></div>
		<footer class="footer">
			<div class="footer_background" style="background-image:url(content/images/footer.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
							<div class="footer_logo"><a href="#">Sublime.</a></div>
							
							<div class="footer_social ml-lg-auto">
								<ul>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script src="content/js/jquery-3.2.1.min.js"></script>
	<script src="content/styles/bootstrap4/popper.js"></script>
	<script src="content/styles/bootstrap4/bootstrap.min.js"></script>
	<script src="content/plugins/greensock/TweenMax.min.js"></script>
	<script src="content/plugins/greensock/TimelineMax.min.js"></script>
	<script src="content/plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="content/plugins/greensock/animation.gsap.min.js"></script>
	<script src="content/plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="content/plugins/easing/easing.js"></script>
	<script src="content/plugins/parallax-js-master/parallax.min.js"></script>
	<script src="content/js/cart.js"></script>
	</body>
</html>
