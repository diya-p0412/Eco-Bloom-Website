<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login</title>
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

        <!-- login page -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 shadow p-3 m-auto border border-success mt-3 border-3 rounded-3"
                    style="background-color:rgba(44, 137, 44, 0.832)">

                    <form action="login1.php" method="POST" >

                        <div class="mb-3">
                            <p class="text-center fw-bold fs-3 text-dark">Login</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Name:</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter user name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="userpassword" class="form-control" placeholder="Enetr password">
                        </div>
                        
                        <button 
                            class="bg-success fs-6 border-dark border-2 rounded-3 my-3 form-control">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>