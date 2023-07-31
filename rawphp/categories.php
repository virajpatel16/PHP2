<?php 
include('conn.php');
 if(isset($_POST['submit'])){

    $name=$_POST['name'];

    $sql="INSERT INTO category(`name`) VALUES('$name')";
    $res=mysqli_query($conn,$sql);

    header('location:categories.php');

 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom Form Design</title>
  <link rel="stylesheet" href="categories.css">
</head>
<body>
  <div class="container">
    <form method="POST">
      <h2>Categories</h2>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" >


    

     
  
      <button type="submit"name="submit">Submit</button>
    </form>
  </div>
</body>
</html>
