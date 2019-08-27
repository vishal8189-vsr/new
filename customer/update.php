<?php
include 'connect.php';
if(isset($_POST['done'])){
    $id=$_GET['id'];
    $username=$_POST['username'];
    $address=$_POST['Address'];
    $contact=$_POST['contact'];
    $q="UPDATE `customer` SET `cid`=$id,`username`='$username',`address`='$address',`contact`=$contact WHERE cid=$id";
    $query=mysqli_query($con,$q);
    header('location:display.php');

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-lg-6 m-auto">
<form method="post">
<br><br><div class="card">
<div class="card-header bg-dark">
<h1 class="text-white text-center"> update Operation</h1>
</div>
<label>   cid:   </label>
<input type="text" name="cid" class="form-control"><br>
<label>  username:  </label>
<input type="text" name="username" class="form-control"><br>
<label>  Address:  </label>
<input type="text" name="Address"class="form-control" ><br>
<label>  Contact:  </label>
<input type="text" name="contact" class="form-control"><br>
<button class="btn btn-success" type="submit" name="done">Submit</button><br>
</div>
</form>
</body>
</html>