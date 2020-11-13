
<?php

$servername='localhost';
$username='root';
$password='';
$database='mydb';
$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die ('connection is fail ');
}
else{
//echo " connected";
}
?>