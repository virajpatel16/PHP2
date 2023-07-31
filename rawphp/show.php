<?php 
  include('conn.php')

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="show.css">
</head>
<body>
<!DOCTYPE html>
<html>
  <head>
    <title>CSS Selectors</title>
    <link href="show.css" rel="stylesheet" />
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </head>
  <body>
    <table>
      <caption>
        CSS Selectors
      </caption>
      <thead>
        <tr>
          <th scope="col">Selector</th>
          <th scope="col">Name</th>
          <th scope="col" rowspan="2">Description</th>
        </tr>
      </thead>
      <tbody>

      
      <?php


$sql= "SELECT * FROM info";
$res= mysqli_query($conn,$sql);


while($row = mysqli_fetch_assoc($res)){






?>
        <tr>
          <td><?php echo $row['id'];?></td>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['password']; ?></td>
          <td><?php echo $row['image']; ?></td>
          <td><a href="upadete.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-outline-primary">Edit</button></a>


          
         <a href="delete.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-outline-danger">Delete</button></a>
          </td>
        </tr>
      <?php } ?>
      </tfoot>
    </table>
</html>
</body>
</html>