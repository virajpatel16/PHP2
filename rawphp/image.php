<?php

include('conn.php');




if(isset($_POST['submit'])){

    $username=$_POST['username'];
    
    $password=$_POST['password'];
   $image=$_FILES['image'];

    $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$image_name=basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $que="INSERT INTO info(`username`,`password`,`image`) VALUES(' $username','$password','$target_file')";
$res=mysqli_query($conn,$que);
        echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }




}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form Method="POST" enctype="multipart/form-data">
    <input type="text" name="username" placeholder="enter username"><br>
    <br>
    <input type="password" name="password" placeholder="password"><br>
    <br>
    <input type="file" name="image" placeholder="password"><br>
    <br>
    <input type="submit" name="submit" ><br>
   
    
</form>
</body>
</html>