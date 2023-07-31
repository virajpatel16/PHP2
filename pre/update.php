<?php


include('conn.php');
$id=$_GET['id'];


$sql="SELECT * FROM stud WHERE id='$id'";
$re=mysqli_query($conn,$sql);
$fetch=mysqli_fetch_assoc($re);

if(isset($_POST['submit'])){


    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $Email=$_POST['email'];
    $msg=$_POST['message'];


    $S="UPDATE stud SET firstname='$firstname',lastname='$lastname',email='$Email',message='$msg'WHERE id='$id'";
    $res=mysqli_query($conn,$S);

    header('location:display.php');

    
}








?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="insert.css">
</head
<body>
   
   


    <link rel="stylesheet" href="insert.css">


    </head>
    <div class="main">

<h1>Contact Form</h1>

<form method="POST">

    <div class="content">
        <input type="text" id="firstName" value="<?php echo $fetch['firstName'];?>" placeholder="First Name" name="firstname">
       
    </div>

    <div class="content">
        <input type="text" id="lastName" value="<?php echo $fetch['lastname'];?>" placeholder=" Last Name" name="lastname">
        
    </div>

    <div class="content">
        <input type="email" id="email" value="<?php echo $fetch['email'];?>" placeholder=" Email ID" name="email">
    </div>

    <div class="content">
        <input type="text" id="message" value="<?php echo $fetch['message'];?>" placeholder=" Write A Message" name="message">
    </div>

    <div class="content">
        <button type="reset" class="reset">Reset</button>
    </div>

    <div class="content">
        <button type="submit" name="submit">Submit</button>
    </div>

</form>


</div>

</body>

</html>