<?php 


include('../conn.php');



$sql="SELECT * FROM info";
$res=mysqli_query($conn,$sql);


while($row= mysqli_fetch_assoc($res)){



    $data[]=$row;
}

echo json_encode($data,JSON_PRETTY_PRINT);
header("Content-type: application/json; charset=utf-8");

print_r($data,JSON_PRETTY_PRINT);

 












?>