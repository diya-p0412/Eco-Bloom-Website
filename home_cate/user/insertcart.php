<?php
session_start();
// session_destroy();
$product_name = $_POST['PName'];
$product_price = $_POST['PPrice'];
$product_quantity = $_POST['PQuantity'];
if (!isset ($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}


if (isset ($_POST['addcart'])) {
    
    //for not updating duplicate product in cart
    $checkitem = array_column($_SESSION['cart'], 'productname');
    if (in_array($product_name, $checkitem)){//inarray func is used for searching
        echo "
        <script>
        alert('This product is already exist in cart');
        window.location.href = 'index.php';
        </script>
        ";


    } else {
        $_SESSION['cart'][] = array('productname' => $product_name, 'productprice' => $product_price, 'productquantity' => $product_quantity);
        header('location:viewcart.php');

    }
}
//Remove item
if(isset($_POST['remove']))
{
    foreach($_SESSION['cart'] as $key => $value)
    {
        if($value['productname']=== $_POST['item'])
        {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);//rearrange the array after removing an item
            header("location:viewcart.php");
        }
    }
}
//update product
if (isset ($_POST['update'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productname'] === $_POST['item']) {
            $_SESSION['cart'][$key] = array('productname' => $product_name, 'productprice' => $product_price, 'productquantity' => $product_quantity);
            header('location:viewcart.php');
        }
    }
}