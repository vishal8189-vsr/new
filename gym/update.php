<?php
include 'connect.php ';
if(isset($_POST['done'])){
    $id=$_GET['id'];
    $gname=$_POST['gname'];
    $eid=$_POST['eid'];
    $q="UPDATE `gym` SET `gid`='$id',`gname`='$gname',`eid`='$eid' WHERE gid='$id'";
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
<h1 class="text-white text-center"> Insert Operation</h1>
</div>
<label>   gid:   </label>
<input type="text" name="gid" class="form-control"><br>
<label>  gname:  </label>
<input type="text" name="gname"class="form-control" ><br>
<label>  eid:  </label>
<input type="text" name="eid" class="form-control"><br>
<button class="btn btn-success" type="submit" name="done">Submit</button><br>
<button class="btn btn-success" type="next" name="next" ><a href="">Next</button><br>
</div>
</form>
</body>
</html>