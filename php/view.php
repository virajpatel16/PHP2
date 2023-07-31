<?php

$servername="localhost";
$username="root";
$password="";
$databasename="sem5";


$conn=new mysqli($servername,$username,$password,$databasename);

if($conn->connect_error){
die("connection fuiler: $conn->connect_error");
} 
$sql="SELECT * FROM stud";
$res=$conn->query($sql);
if($res ->num_rows > 0){
while($row = $res->fetch_assoc()){
    echo "firstname :".$row["firstName"]."lastname".$row["lastName"] ."Age".$row["Age"]. "gender".$row["gender"]."Birthday".$row["Birthday"]."sem".$row["sem"]."contact".$row["contact"]."email".$row["email"]."password".$row["password"]."<br>";
}
}
else{
    echo 0;

}
$conn->close();


?>
