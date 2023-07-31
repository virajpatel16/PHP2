<?php 
include('conn.php');


if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $id=$_POST['category'];
    $sql="INSERT INTO sub(`name`,`categories_id`) VALUES('$name','$id')";
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


<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input, textarea, select  {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>


<div class="container">
    <h2>Add Category</h2>
    <form method="post">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
      <select name="category" id="">
          <?php 
          
          $ss="SELECT * FROM category";
          $res=mysqli_query($conn,$ss);

          while($rr=mysqli_fetch_assoc($res)){

          
          ?>
            <option value="<?php echo $rr['id']; ?>"><?php echo $rr['name']; ?></option>

          <?php }?>
        </select>
      </div>

      <div class="form-group">
        <div class="form-group">
        <input type="submit" name="submit" value="Submit">
      </div>
    </form>
  </div>
</body>
</html>