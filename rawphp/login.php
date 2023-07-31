<?php
 include('conn.php');

 if(isset($_POST['username'] )&& isset($_POST['password'])){

    $username= $_POST['username'];
    $password=$_POST['password'];


    $sql="SELECT * FROM info ";
    $res=mysqli_query($conn,$sql);




    while($row=mysqli_fetch_assoc($res)){


$data=array();

    }
    if($res){
        $data=array("statu"=>200,"messge"=>"data inserted");
    }
    else{
        $data=array("statu"=>200,"messge"=>"data fauiler");
    }

 }

else{

    $data=array("statu"=>200,"messge"=>"data is not found");
}

echo json_encode($data,JSON_PRETTY_PRINT);
header("Content-type: application/json; charset=utf-8");
 
 
?>