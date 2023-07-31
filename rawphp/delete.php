<?php 
 


 include('conn.php');

 $id=$_GET['id'];


 $sql="DELETE FROM info WHERE id='$id'";
 $row=mysqli_query($conn,$sql);
 header('location:show.php');

?>