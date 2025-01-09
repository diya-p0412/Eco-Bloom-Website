<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Cart</title>
    </head>

    <body>
        <?php
        include 'header.php';
        ?>
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-10 text-center mb-5 rounded-3" style="background-color:rgba(58, 156, 20, 0.707)">
                    <h1 class="text-dark font-monospace ">My Cart</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-around">
                <div class="col-sm-12 col-md-6 col-lg-9">
                    <table class="table text-center table-bordered">
                        <thead class="text-dark fs-5" style="background-color:rgba(58, 156, 20, 0.707)">
                            <th>Sr No.</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </thead>

                        <tbody>
                            <?php
                            
                            
                            $total = 0;
                            $ptotal = 0;
                            $i = 0;
                            if (isset ($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $key => $value) {//key stores index of product and $value stores value of products
                                    $ptotal = $value['productprice'] * $value['productquantity'];
                                    $total += $value['productprice'] * $value['productquantity'];
                                    $i = $key + 1;
                                    echo '
                                    <form action="insertcart.php" method="POST">
                            <tr>
                            <td>' . $i . '</td>
                            <td><input type="hidden" name="PName" value="'.$value["productname"].'">' . $value['productname'] . '</td>
                            <td><input type="hidden" name="PPrice" value="'.$value["productprice"].'">' . $value['productprice'] . '</td>
                            <td><input type="text" name="PQuantity" value="'.$value["productquantity"].'"></td>
                            <td>' . $ptotal . '</td>
                            <td><button name="update" class="btn text-light rounded-3" style="background-color:rgba(58, 156, 20, 0.707)">Update</button></td>
                            <td><button name="remove" class="btn btn-danger rounded-3">Delete</button></td>
                            <input type="hidden" name="item" value="'.$value["productname"].'">
                            </tr>
                            </form>
                            ';
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
            
        </div>
        <div class="row justify-content-around">
        <div class=" col-md-9  text-center rounded-3">
                            <h3 class="text-light text-center" style="background-color:rgba(58, 156, 20, 0.707)">TOTAL: </h3>
                            <h1 class="text-success text-center" ><?php
            echo number_format($total, 2), "₹";
            ?></h1>
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