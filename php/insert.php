<?php

$servername="localhost";
$username="root";
$password="";
$databasename="sem5";


$conn=new mysqli($servername,$username,$password,$databasename);

if($conn->connect_error){
die("connection fuiler: $conn->connect_error");
} 
$sql="INSERT INTO stud ('firstName','lastName','Age','gender','Birthday','sem','contact','email','password')VALUES('viraj','gondaliya','19','male',1-1-2002,'2nd','7667098765','viraj@gmail.com','1009')";
if($conn -> multi_query($sql) === true){
    echo "new recoreder created ";
}
else{
    echo "Error: ".$sql . "<br>".$conn->error;

}
$conn->close();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>information</title>
    
</head>
<body style="text-align: center;">

<h1>information</h1>
<form method="POST">

first name:<input type="text" name="fname">
<br>

last name:<input type="text" name="fname">
<br>
Age :<input type="number" name="fname">
<br>
<br>
<br>
gender
<br>
male:
<input type="radio" name="male"><br>
famale:
<input type="radio" name="male">
<br>

Birthdate:<input type="text" name="fname">
<br>
<br>
sem:
<br>
1st<input type="checkbox" name="male">
<br>
2nd<input type="checkbox" name="male">
<br>
3nd<input type="checkbox" name="male">
<br>
<br>
contact:<input type="number" name="male">
<br>
email:<input type="email" name="email">
<br>
password<input type="password" name="male">

<br>
<br>
<input type="submit" name="submit" class="btn btn-primary">
</form>
</body>
</html>