<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="./home.css"/>
<link rel="stylesheet" type="text/css" href="./bootstrap.min.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style=background-color:#FBD786;>
    <div class="container">
    <h2 class="text-center text-success">Welcome<?php echo $_SESSION['username'];  ?> </h2>
    <a href="http://localhost/project/customer/insert.php"><i class="fa fa-home" aria-hidden="true"></i>customer detail</a><br><br><br>
    <a href="http://localhost/project/emp/insert.php"><i class="fa fa-home" aria-hidden="true"></i>employee detail</a><br><br><br>
<a href="http://localhost/project/equip/insert.php"><i class="fa fa-home" aria-hidden="true"></i>equipment detail</a><br><br><br>
<a href="http://localhost/project/gym/insert.php"><i class="fa fa-home" aria-hidden="true"></i>gym detail</a><br><br><br>
<a href="http://localhost/project/package/insert.php"><i class="fa fa-home" aria-hidden="true"></i>package detail</a><br><br><br>
<a href="http://localhost/project/pay/insert.php"><i class="fa fa-home" aria-hidden="true"></i>payment detail</a><br><br><br>

    <!-- <a href="logout.php">Logout </a><br><br><br> -->
    
    <button class="btn-danger btn"><a href="logout.php">Logout </a></button>
    </div>
</body>
</html>