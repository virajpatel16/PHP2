<?php

include('conn.php');




if(isset($_POST['submit'])){

    $username=$_POST['username'];
    
    $password=$_POST['password'];

  $que="INSERT INTO info(`username`,`password`) VALUES(' $username','  $password')";
  $res=mysqli_query($conn,$que);


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
    
<form Method="POST">
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