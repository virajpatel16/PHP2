<?php


include('conn.php');


?>

<?php
$sql="SELECT * FROM stud";

$res=mysqli_query($conn,$sql);


while($row = mysqli_fetch_assoc($res)){



?>


<Html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
   
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['firstName']; ?></td>
      <td><?php echo $row['lastName']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['message']; ?></td>
      <td><a href="update.php?id=<?php echo $row['id'];?>"><button class="btn btn-outline-primary"type="button">Edit</button></td>
      <td><a href="Delete.php?id=<?php echo $row['id'];?>"><button class="btn btn-outline-danger"type="button">Delete</button></td>
      <td></td>
    </tr>
    
  </tbody>
  <?php }?>
</table>
</body>


</Html>
