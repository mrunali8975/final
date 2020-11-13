<?php
include 'conn.php';

    $sql= "SELECT * FROM registration";
    $myresult=$conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
<h1 class="text-center text-warning">Display Table</h1>
<table class="table  table-striped table-hover table-bordered" id="myTable">
    <thead>
        <tr class="bg-dark text-white text-center">
            <th scope="col">ID</th>
            <th scope="col">First name</th>
            <th scope="col">Email id</th>
            
        </tr >
    </thead>
    <tbody>
        <?php
        include 'conn.php';
$sql="SELECT * FROM `registration`";
$result=$conn->query($sql);
// if($result->num_rows>0)
// {
//     $id=0;
//    while($row=$result->fetch_assoc())
//    { // $id=$id+1;
       
//    }
// }  

while ($res=mysqli_fetch_array($result))
{



?>
<tr class="text-center">
    <td><?php echo $res['id']; ?></td>
    <td><?php echo $res['fname']; ?></td>
    <td><?php echo $res['email_id']; ?></td>

    
</tr>
<?php
}
?>

    </tbody>
</table>

</div>
<hr>
</body>
</html>