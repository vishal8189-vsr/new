<?php
include 'connect.php';
$id=$_GET['id'];
$q="DELETE FROM `equipment` WHERE eid=$id";
mysqli_query($con,$q);
header('location:display.php');
?>