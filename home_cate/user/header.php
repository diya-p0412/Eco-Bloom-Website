<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
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
            if(isset($_SESSION['cart']))
            {
            $count = count($_SESSION['cart']);
            }
        ?>

        <!-- Navbar -->
        <nav class="navbar navbar-light bg-success sticky-top">
            <div class="container-fluid font-monospace">
                <div >
                    <a class="navbar-brand p-2 fw-bold fs-2 text-light"><img src="./images/logo.png" height=50 width=100
                            alt="Logo">ECO-BLOOM</a>
                </div>
                <div class="d-flex">
                    <a href="index.php" class="text-light text-decoration-none pe-2"></i> Home|</a>
                    <a href="viewcart.php" class="text-light text-decoration-none pe-2"><i
                            class="fa-solid fa-cart-shopping"></i><sup>(<?php
                            echo "$count";
                            ?>)</sup> Cart |</a>
                    <span class="text-light pe-2">
                        <a href="../../loginreg/login_form.php" class="text-light text-decoration-none"></i> Login |</a>
                        <a href="../admin/mystore.php" class="text-light text-decoration-none">Admin |</a>
                        <a href="" class="text-light text-decoration-none">Service |</a>
                        <a href="../../contactus/contactus.php" class="text-light text-decoration-none">Contact us</a>
                    </span>
                </div>
            </div>
        </nav>
    <div style="background-color:rgba(58, 156, 20, 0.707);" class="sticky font-monospace">
        <ul class="list-unstyled d-flex justify-content-center">
            <li><a href="indoor.php" class="text-decoration-none fs-5 px-5 text-light">INDOOR PLANTS</a></li>
            <li><a href="outdoor.php" class="text-decoration-none fs-5 px-5 text-light">OUTDOOR PLANTS</a></li>
            <li><a href="garden.php" class="text-decoration-none fs-5 px-5 text-light">GARDEN DECOR</a></li>

        </ul>
    </div>

    </body>

</html>