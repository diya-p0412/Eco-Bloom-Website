<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home page</title>
        <?php
        include 'header.php';

        ?>
    </head>

    <body>
        <!-- card -->
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">

                    <h1 class="text-success font-monospace my-3 text-center">Outdoor Plants</h1>

                    <?php
                    include 'config.php';
                    $record = mysqli_query($con, "SELECT * FROM tblproduct ");
                    while ($row = mysqli_fetch_array($record)) {
                        $check_page = $row['PCategory'];
                        if ($check_page === 'Outdoor Plants') {

                            echo "
                        <div class='col-md-6 col-lg-4 m-auto mb-3 '  >
                        <form action='insertcart.php' method='POST'>
        <div class='card p-3 m-auto' style='width: 18rem; background-color:rgba(58, 156, 20, 0.707);'>
            <img src='../admin/product/$row[Pimage]' height=250 width=250 alt='Card image cap'>
            <div class='card-body text-center '>
                <h5 class='card-title text-light fs-4 fw-bold'>$row[PName]</h5>
                <p class='card-text text-light fs-6 '>Rs: $row[PPrice]</p>
                <input type='hidden' name='PName' value='$row[PName]'>
                <input type='hidden' name='PPrice' value='$row[PPrice]'>
                <input type='number' name='PQuantity' value= min='1' max='20' placeholder='Quantity'>
                <input type='submit' name='addcart' class=' btn btn-success my-3 w-100' value='Add To Cart'>

            </div>
        </div>
        </form>
        </div>
        ";
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
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
                    <i class="fa-solid fa-greater-than"></i> <a href="../../aboutus/aboutus.php" style="text-decoration:none" class="text-light">About Us</a><br>
                    <i class="fa-solid fa-greater-than"></i> <a href="../../contactus/contactus.php" style="text-decoration:none" class="text-light" >Contact Us</a><br>
                    <i class="fa-solid fa-greater-than" ></i> <a href="" style="text-decoration:none" class="text-light">Services</a>
                </li>
               </ul>
            </div>
    </footer>
        


    </body>

</html>