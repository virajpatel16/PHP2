<?php

include('conn.php');
    

if(isset($_POST['username'] ) && isset($_POST['password'])){

    $username=$_POST['username'];
    $password=$_POST['password'];


     $Sql="INSERT INTO info(`username`,`password`) VALUES('$username','$password')";
     $res=mysqli_query($conn,$Sql);
    //  $row=mysqli_fetch_assoc($res);



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