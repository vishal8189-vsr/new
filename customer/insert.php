<?php
include 'connect.php ';
if(isset($_POST['done'])){
    $username=$_POST['username'];
    $address=$_POST['Address'];
    $contact=$_POST['contact'];
    $q="INSERT INTO `customer`( `username`, `address`, `contact`) VALUES ('$username','$address','$contact')";
    $query=mysqli_query($con,$q);
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
<h1 class="text-white text-center"> Insert Operation for customer</h1>
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
<button class="btn btn-success" type="next" name="next" ><a href="http://localhost/project/customer/display.php">Next</button><br>
</div>
</form>
</body>
</html>