<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Page</title>
        <!-- Bootstrap cdn/css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- font awesome cdn -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <style>
            body {
                background-image: url(./images/bg_admin.jpeg);
            }
        </style>
    </head>

    <body>
        <!-- For adding product card -->

        <div class="container">
            <div class="row">
                <div class="col-md-6 shadow m-auto border border-success mt-3 border-3 rounded-3"
                    style="background-color:rgba(44, 137, 44, 0.832)">

                    <form action="insert.php" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <p class="text-center fw-bold fs-3 text-dark">Product Detail:</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Product Name:</label>
                            <input type="text" name="pname" class="form-control" placeholder="Enter product name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Price:</label>
                            <input type="text" name="pprice" class="form-control" placeholder="Enetr product price">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Add Product image</label>
                            <input type="file" name="pimg" class="form-control" placeholder="Choose File">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select Product Category:</label>
                            <select class="form-select" name="pcate">
                                <option selected>Search category</option>
                                <option value="Indoor Plants">Indoor Plants</option>
                                <option value="Outdoor Plants">Outdoor Plants</option>
                                <option value="Garden Decor">Garden Decor</option>
                            </select>
                        </div>
                        <button name="submit"
                            class="bg-success fs-6 border-dark border-2 rounded-3 my-3 form-control">Upload</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Fetch data of table -->
        <div class="container">
            <div class="row ">
                <div class="col-md-8 m-auto">


                    <table class="table table-hover border border-success border-3 m-5" style="background-color:rgba(44, 137, 44, 0.832);">
                        <thead>
                            <th>Id</th>
                            <th>Product name</th>
                            <th>Product price</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Delete</th>
                        </thead>

                        <tbody>
                            <?php
                            include 'config.php';
                            $record = mysqli_query($con, 'SELECT * FROM `tblproduct`');
                            while ($row = mysqli_fetch_array($record))
                                echo "
                    <tr>
                <td>$row[Id]</td>
                <td>$row[PName]</td>
                <td>$row[PPrice]</td>
                <td><img src='$row[Pimage]' height='100' width='100' ></td>
                <td>$row[PCategory]</td>
                <td><a href='' name='remove' class='btn-danger text-decoration-none text-center fs-7 p-1 rounded-2'> Delete</a></td>
                
            </tr>
                    ";
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </body>

</html>