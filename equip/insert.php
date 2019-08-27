<?php
include 'connect.php ';
if(isset($_POST['done'])){
    $ename=$_POST['ename'];
    $gid=$_POST['gid'];
    $cid=$_POST['cid'];
    $q="INSERT INTO `equipment`( `ename`, `gid`, `cid`) VALUES ('$ename','$gid','$cid')";
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
<h1 class="text-white text-center"> Insert Operation equip</h1>
</div>
<label>   eid:   </label>
<input type="text" name="eid" class="form-control"><br>
<label>  ename:  </label>
<input type="text" name="ename" class="form-control"><br>
<label>  gid:  </label>
<input type="text" name="gid"class="form-control" ><br>
<label>  cid:  </label>
<input type="text" name="cid" class="form-control"><br>
<button class="btn btn-success" type="submit" name="done">Submit</button><br>
<button class="btn btn-success" type="next" name="next" ><a href="http://localhost/project/equip/display.php">Next</button><br>
</div>
</form>
</body>
</html>