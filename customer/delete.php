<?php
include 'connect.php';
$id=$_GET['id'];
$q="DELETE FROM `customer` WHERE cid=$id";
mysqli_query($con,$q);
header('location:display.php');
?>