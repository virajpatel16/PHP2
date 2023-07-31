





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
input,select{
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
 border-radius: 4px;


    box-sizing: border-box;

}
*{
    left: 25%;
    padding: 100px;
    text-align: center;
    border: 1px solid green;
    align-items: center;
    margin: 0;
      padding: 0;
      box-sizing: border-box;
}
input[type=submit]{
    width: 5%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    
  
    border-radius: 4px;
    cursor: pointer;
}
    </style>
</head>
<body>
   <form method="POST" >
  name: <input type="text" name="sname" value="">
  <br>

  faculty: <input type="text" name="fname" value="">
  <br>
  semester: <input type="text" name="sem" value="">
  <br>
  <input type="submit" name="sub" value="">
   </form>
</body>

<?php 
$stud;
if(isset($_POST['sub'])){
    $sname=$_POST['sname'];
    $fname=$_POST['fname'];
    $sem=$_POST['sem'];
    



}



?>
</html>

