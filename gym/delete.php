<?php
include 'connect.php';
$id=$_GET['id'];
$q="DELETE FROM `gym` WHERE gid=$id";
mysqli_query($con,$q);
header('location:display.php');
?>