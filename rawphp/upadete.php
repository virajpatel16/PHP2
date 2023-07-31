<?php

include('conn.php');


$id = $_GET['id'];

$s="SELECT * FROM info WHERE id='$id'";
$ra= mysqli_query($conn,$s);
$fes= mysqli_fetch_assoc($ra);


if(isset($_POST['submit'])){

    $username=$_POST['username'];
    
    $password=$_POST['password'];

  $que="UPDATE info SET username='$username',password='$password'WHERE id='$id'";
  $res=mysqli_query($conn,$que);

  header('location:show.php');


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
    <input type="text" name="username" value="<?php echo $fes['username']; ?>" placeholder="enter username"><br>
    <br>
    <input type="text" name="password" value="<?php echo $fes['password']; ?>" placeholder="password"><br>
    <br>
    <input type="submit" name="submit" ><br>
    <br>
    
</form>
</body>
</html>