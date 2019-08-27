<?php
include 'connect.php';
$id=$_GET['id'];
$q="DELETE FROM `payment` WHERE pid=$id";
mysqli_query($con,$q);
header('location:display.php');
?>