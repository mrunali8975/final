<?php
include 'conn.php';

$id= $_GET['id'];
$q="DELETE FROM  `registration` WHERE id=$id";
mysqli_query($conn,$q);
header('location:insert.php');

?>