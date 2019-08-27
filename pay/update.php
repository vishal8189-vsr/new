<?php
include 'connect.php ';
if(isset($_POST['done'])){
    $id=$_GET['id'];
    $name=$_POST['name'];
   $amount=$_POST['amount'];
   $date=$_POST['date'];
   $cid=$_POST['cid'];
    $gid=$_POST['gid'];
    $eid=$_POST['eid'];
    $q="UPDATE `payment` SET `pid`='$id',`name`='$name',`Amount`='$amount',`date`='$date',`cid`='$cid',`gid`='$gid',`eid`='$eid' WHERE pid=$id";
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
<label>   pid:   </label>
<input type="text" name="pid" class="form-control"><br>
<label>  name:  </label>
<input type="text" name="name" class="form-control"><br>
<label>  Amount:  </label>
<input type="text" name="Amount"class="form-control" ><br>
<label>  date:  </label>
<input type="text" name="date" class="form-control"><br>
<label>  cid:  </label>
<input type="text" name="cid" class="form-control"><br>
<label>   gid:   </label>
<input type="text" name="gid" class="form-control"><br>
<label>   eid:   </label>
<input type="text" name="eid" class="form-control"><br>
<button class="btn btn-success" type="submit" name="done">Submit</button><br>

</div>
</form>
</body>
</html>