<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="contactus.css">
		<title>Contact us Page</title>
		<!-- Bootstrap cdn/css -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!-- font awesome cdn -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	</head>

	<body>
		<?php
		session_start();
		$count = 0;//it will calculate that how many arrays are stored in cart and store in count
		if (isset ($_SESSION['cart'])) {
			$count = count($_SESSION['cart']);
		}
		?>
		<!-- Header section -->

		<nav class="navbar navbar-light bg-success sticky-top w-auto">
			<div class="container-fluid font-monospace">
				<div>
					<a class="navbar-brand p-2 fw-bold fs-2 text-light"><img src="./images/logo.png" height=50 width=100
							alt="Logo">ECO-BLOOM</a>
				</div>
				<div class="d-flex">
					<a href="../../eco bloom/home_cate/user/index.php" class="text-light text-decoration-none pe-2"></i>
						Home|</a>
					<a href="../../eco bloom/home_cate/user/viewcart.php"
						class="text-light text-decoration-none pe-2"><i class="fa-solid fa-cart-shopping"></i><sup>(<?php
						echo "$count";
						?>)</sup> Cart |</a>
					<span class="text-light pe-2">
						<a href="../loginreg/login_form.php" class="text-light text-decoration-none"></i> Login |</a>
						<a href="../home_cate/admin/mystore.php" class="text-light text-decoration-none">Admin |</a>
						<a href="" class="text-light text-decoration-none">Service |</a>
						<a href="contactus.html" class="text-light text-decoration-none">Contact us</a>
					</span>
				</div>
			</div>
		</nav>



		<!-- banner section -->
		<section class="banner text-light" style="background-color:rgb(56, 150, 20);">
			<h1>Get in Touch With Us</h1>
			<p>
				We're here to answer any questions you may have.
			</p>
		</section>

		<!-- Contact form -->
		<div>
			<div class="contact-form">
				<div class="form-container">
					<h2>Your Details</h2>
					<form action="#" method="POST">

						<label for="name">Name: </label>
						<input type="text" id="name" name="name" placeholder="Enter Name" required>

						<label for="email">Email: </label>
						<input type="email" id="email" name="email" placeholder="Enter Email" required>

						<label for="phone">Contact no.: </label>
						<input type="tel" id="phone" name="phone" placeholder="Enter Contact no.">

						<label for="message">Message: </label>
						<textarea id="message" name="message" rows="4" placeholder="Enter Query" required></textarea>

						<button type="submit" class="submit-button">Submit</button>
					</form>
				</div>
			</div>


		</div>

		<!-- Footer section -->
		<footer class="bg-success d-flex text-light p-5">
			<div class="p-3 mx-5 text-left">
				<!-- address -->
				<h3>Our Office</h3>
				<h5><i class="fa-solid fa-location-dot" style="color: #f7f7f7;"></i> 123, Main    Road,
					<br>
					Ahmedabad, Gujarat
				</h5>
			</div>
			<!-- contact us -->
			<div class="p-3 mx-5">

				<h3>Contact Us</h3>
				<i class="fa-solid fa-phone"></i> +91 96784 74356<br>
				<i class="fa-solid fa-envelope"></i> ecobloom123@gmail.com<br>
				<a><i class="fa-brands fa-instagram fa-2x p-2"></i></a>
				<a><i class="fa-brands fa-youtube fa-2x p-2"></i></a>
				<a><i class="fa-brands fa-facebook fa-2x p-2"></i></a>
				<a><i class="fa-brands fa-pinterest fa-2x p-2"></i></a>
			</div>
			<div class="p-3 mx-5 ">
				<!-- quick links -->
				<h3>Quick Links</h3>
				<ul class=" text-light" style="list-style:none;text-decoration:none">
					<li>
						<i class="fa-solid fa-greater-than"></i> <a href="../aboutus/aboutus.php" style="text-decoration:none"
							class="text-light">About Us</a><br>
						<i class="fa-solid fa-greater-than"></i> <a href="" style="text-decoration:none"
							class="text-light">Services</a>
					</li>
				</ul>
			</div>
		</footer>



	</body>

</html>