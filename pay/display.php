<!-- <?php
// include 'connect.php ';

// $username=$_POST['username'];
// $address=$_POST['Address'];
// $contact=$_POST['contact'];
// $q="SELECT * FROM `employee`";
// $query=mysqli_query($con,$q);

// ?> -->
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
<div class="container">
<div class="col-lg-12">
<h1 class="text-warning text-center"> Disply table payment</h1>
<table class="table table-striped table-hover table-bordered">
<tr class="bg-dark text-white text-center">
<th>pid</th>
<th>name</th>
<th>amount</th>
<th>date</th>
<th>cid</th>
<th>gid</th>
<th>eid</th>
<th>delete</th>
<th>update</th>
</tr>
<?php
include 'connect.php ';
$q="SELECT * FROM `payment`";
$query=mysqli_query($con,$q);

while($res=mysqli_fetch_array($query)){

?>  
<tr class="text-center">
<td><?php echo $res['pid']; ?></td>
<td><?php echo $res['name']; ?> </td>
<td><?php echo $res['amount']; ?></td>
<td><?php echo $res['date'];?></td>
<td><?php echo $res['cid'];?></td>
<td><?php echo $res['gid'];?></td>
<td><?php echo $res['eid'];?></td>
<td><button class="btn-danger btn"> <a href="delete.php? id=<?php echo $res['pid']; ?>" class="text-white"> delete</a></button> </td>
<td><button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['pid'];?>" class="text-white">update</a></button> </td>
</tr>
<?php
}
?>
</table>
</div>
</div>
<button type="back" name="back" ><a href="http://localhost/project/login_system/home.php">back</button><br><br>
</body>
</body>
</html>