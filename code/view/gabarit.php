<?php 
/**
 * @file    gabarit.php
 * @brief   The header and the footer on the web site
 * @author  Create by Pierrot Métille
 * @version 24.03.2023
 * @note 
 */
?>
<!DOCTYPE html>
	<html>
		<head> 
			<meta charset="utf-8">
			<meta name="<?=$title?>" content="This is a gabarit">
			<link rel="stylesheet" href="view/content/styles/mainStyles.css">
			<link rel="stylesheet" href="view/content/styles/bootstrap5/css/bootstrap.css">
			<script src="view/content/styles/bootstrap5/js/bootstrap.js"></script>
		</head>
	<body>

	<div class="super_container">

		<!-- Header -->
		
		<div class="container">
			<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
				<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
					<span class="fs-4">Pierrot Website<br class="littleBr"><span class="littleAndItalic">No, you'r not dreaming</span></span>
				</a>

				<ul class="nav nav-pills">
					<li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Features</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
					<li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
					<li class="nav-item"><a href="#" class="nav-link">About</a></li>
				</ul>
				
			</header>
  		</div>
		<div class="b-example-divider"></div>
		
		<?=$content?>

		<!-- Footer -->
	
		<footer class="footer">

			<div class="b-example-divider"></div>
			<div class="container">
			<footer class="py-5">
				<div class="row">
				<div class="col-6 col-md-2 mb-3">
					<h5>Section</h5>
					<ul class="nav flex-column">
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
					</ul>
				</div>

				<div class="col-6 col-md-2 mb-3">
					<h5>Section</h5>
					<ul class="nav flex-column">
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
					</ul>
				</div>

				<div class="col-6 col-md-2 mb-3">
					<h5>Section</h5>
					<ul class="nav flex-column">
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
					</ul>
				</div>

				<div class="col-md-5 offset-md-1 mb-3">
					<form>
					<h5>Subscribe to our newsletter</h5>
					<p>Monthly digest of what's new and exciting from us.</p>
					<div class="d-flex flex-column flex-sm-row w-100 gap-2">
						<label for="newsletter1" class="visually-hidden">Email address</label>
						<input id="newsletter1" type="text" class="form-control" placeholder="Email address">
						<button class="btn btn-primary" type="button">Subscribe</button>
					</div>
					</form>
				</div>
				</div>

				<div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
				<p>&copy; 2023 Métille, Inc. All rights reserved <span class="littleAndItalic">(Joking i'dont care)</sapn>.</p>
				<ul class="list-unstyled d-flex">
					<li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
					<li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
					<li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
				</ul>
				</div>
			</footer>
		</div>
	
	</div>

	</body>
</html>
