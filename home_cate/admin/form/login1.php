<?php
    // for validation and login

$con = mysqli_connect('localhost', 'root', '', 'homecate');
$A_name = $_POST['username'];
$A_password = $_POST['userpassword'];

// getting value of password and username from data base comparing them 
$result = mysqli_query($con,"SELECT * FROM `admin` WHERE username='$A_name' AND userpassword='$A_password' ");
session_start();
//num_rows indicates that data is present in result or not
if(mysqli_num_rows($result)>0){
    $_SESSION['admin'] = $A_name;
    echo"
        <script>
        alert('Login successfully');
        window.location.href='../mystore.php';  //after login we have to go to mystore for admin by this line
        </script>
   ";
}
else{
    echo"
    <script>
    alert('Please enter valid username or password');
    window.location.href='login.php';
    </script>
   ";
}
?>