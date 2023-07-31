<?php 

   if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    


    echo  "username  :" . $username ;
    echo "<br> password : ".  $password;

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
    
<form method="POST"><input type="text" name="username" placeholder="enter username" >

<br><br>
<input type="password" name="password"placeholder="enter password" >
<br><br>

<input type="submit" name="submit">
</form>

</body>
</html>