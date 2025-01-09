<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    
    <!-- Bootstrap cdn/css-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- font awesome cdn -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> 
        <link rel="stylesheet" href="./aboutus.css">
</head>
<body>
    <?php
    session_start();
    $count = 0;//it will calculate that how many arrays are stored in cart and store in count
    if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
    }
    ?>

    <!-- Nav bar -->
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

    <section class="section">
    <div class="container">
     <div class="section_header">
      <h2 class="section_h2">About Us</h2>
      <p class="section_p text-center">Ecobloom, fueled by a shared love for nature, empowers individuals to become informed garden guardians. We achieve this by promoting sustainable practices through knowledge and proactive plant care solutions. Our user-friendly web platform leverages cutting-edge technology, including a powerful AI-powered chatbot, to make plant health diagnosis a breeze. Simply upload an image, and our innovative tool will analyze it to identify potential issues.  Embark on your sustainable gardening journey today and appreciate the beauty of nature – order now!</p>
     </div> 
     <div class="about_container">
        <div class="about_item">
            <div class="about_img_box bg-success">
                <img src="./images/plant.png" alt="" class="about_item_img" />
            </div>
            <h4 class="about_item_title">Large Assortment</h4>
            <p class="about_item_text">
                we offer many different types of product with fewer variations in each category.
            </p>
        </div>
        <div class="about_item">
            <div class="about_img_box bg-success">
                <img src="./images/delivery.png" alt="" class="about_item_img" />
            </div>
            <h4 class="about_item_title">Fast&Free Shipping</h4>
            <p class="about_item_text">
                4 day or less delivery time,free shipping and an expedited delivery option.
            </p>
        </div>
        <div class="about_item">
            <div class="about_img_box bg-success" >
                <img src="./images/support.png" alt="" class="about_item_img" />
            </div>
            <h4 class="about_item_title">Services</h4>
            <p class="about_item_text ">
                Plant disese Identification feature is also provided
            </p>
        </div>
        </div> 
     </div>
    </section>
    <footer class="bg-success d-flex text-light p-5">
            <div class="p-3 mx-5">
                <!-- address -->
                <h3>Our Office</h3>
                <h5><i class="fa-solid fa-location-dot" style="color: #f7f7f7;"></i> 123, Main Road,
                <br> 
                 Ahmedabad, Gujarat</h5>
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
                    <i class="fa-solid fa-greater-than"></i> <a href="" style="text-decoration:none" class="text-light">About Us</a><br>
                    <i class="fa-solid fa-greater-than"></i> <a href="../contactus/contactus.php" style="text-decoration:none" class="text-light" >Contact Us</a><br>
                    <i class="fa-solid fa-greater-than" ></i> <a href="" style="text-decoration:none" class="text-light">Services</a>
                </li>
               </ul>
            </div>
    </footer>
        
</body>
</html>
