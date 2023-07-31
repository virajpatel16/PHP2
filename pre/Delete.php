<?php 



include('conn.php');



$id=$_GET['id'];


$sql="DELETE  FROM stud WHERE id='$id'";
$res=mysqli_query($conn,$sql);


header('location:display.php');








?>