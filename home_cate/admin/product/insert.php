<?php
if (isset ($_POST['submit'])) {
    //database include
    include 'config.php';
    $product_name = $_POST['pname'];
    $product_price = $_POST['pprice'];
    $product_image = $_FILES['pimg'];
    $product_cate = $_POST['pcate'];
    $image_loc = $_FILES['pimg']['tmp_name']; //temparory saved image location
    $image_name = $_FILES['pimg']['name']; //temparory saved image name
    $img_dest = "uploadimg/" . $image_name;
    move_uploaded_file($image_loc, "uploadimg/" . $image_name);//first para image loc second image destination

    //inserting image in database
    // database path--http://localhost/dashboard/-->phpmyadmin
    // insert product
    mysqli_query($con," INSERT INTO `tblproduct`( `PName`, `PPrice`, `Pimage`, `PCategory`) VALUES ('$product_name','$product_price','$img_dest','$product_cate')");//two parameters one database connection , second para 

    header("location:index.php");


}
// for remove item




