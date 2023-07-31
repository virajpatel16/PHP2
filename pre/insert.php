   <?php
   

   include('conn.php');


if(isset($_POST['submit'])){

    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $Email=$_POST['Email'];
    $msg=$_POST['msg'];



    $sql="INSERT INTO stud(`firstName`,`lastName`,`email`,`message`) VALUES('$firstname','$lastname','$Email','$msg')"; 

    $res=mysqli_query($conn,$sql);
    
}
   
   
   ?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="insert.css">
</head>
<body>
   
   


    <link rel="stylesheet" href="insert.css">


    </head>
    <div class="main">

<h1>Contact Form</h1>

<form method="POST">

    <div class="content">
        <input type="text" id="firstName" placeholder=" First Name "name="fname">
    </div>

    <div class="content">
        <input type="text" id="lastName" placeholder=" Last Name" name="lname">
        
    </div>

    <div class="content">
        <input type="email" id="email" placeholder=" Email ID" name="Email">
    </div>

    <div class="content">
        <input type="text" id="message" placeholder=" Write A Message" name="msg">
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