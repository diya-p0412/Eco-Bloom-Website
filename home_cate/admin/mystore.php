<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Home Page</title>
        <!-- Bootstrap cdn/css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- font awesome cdn -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
            <!-- External css link -->
        <link rel="stylesheet" href="../mystore.css">

    </head>
     
    <?php
    session_start();
    if(!$_SESSION['admin']){
        header("location:form/login.php");
    }
    ?>
    <body>
        
        <nav class="navbar navbar-light" style="background-color:rgba(44, 137, 44, 0.832)">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <h1>My Store</h1>
                </a>
                <span>
                    <i class="fa-solid fa-user"></i>
                    Hello,<?php
                        echo $_SESSION['admin']
                    ?>|
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <a href="form/logout.php" style="text-decoration:none" class="text-dark">Log out</a>|
                    <a href="" style="text-decoration:none"class="text-dark">User Panel</a>
                </span>
            </div>
        </nav>

        <!-- Dashboard -->
        <div>
            <h2 class="text-center" >Dashboard</h2>
        </div>
        <div class=" col-md-6 text-center m-auto" style="background-color:rgba(44, 137, 44, 0.832)">
            <a href="product/index.php" class="text-decoration-none text-dark fs-4 px-5">Add Product</a>
            
        </div>


    </body>

</html>