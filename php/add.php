<?php

$servername="localhost";
$username="root";
$password="";
$databasename="sem5";


$conn=new mysqli($servername,$username,$password,$databasename);

if($conn->connect_error){
die("connection fuiler: $conn->connect_error");
} 
$sql="INSERT INTO stud (firstName,lastName,Age,gender,Birthday,sem,contact,email,password)VALUES('viraj','gondaliya','19','male','2004-2-1','2nd','7667098765','viraj@gmail.com','1009')";
if($conn -> multi_query($sql) === TRUE){
    echo "new recoreder created ";
}
else{
    echo "Error: ".$sql . "<br>".$conn->error;

}
$conn->close();


?>
