<html>
<head>
   <style>
    table,th,to{
        border-radius: 10%;
        border: 1px solid black;
        padding: 16px;
        text-align: center;
        justify-content: center;
        margin-top: 100px; 
        margin-bottom:80px;
        
    }
    td{
     padding: 38px;
    }
   </style> 
</head>
<body style="margin-top: 100px; margin-bottom:80px; text-align:center">
<marque>
        
        <table>
            
<th>your name</th>

<th>Conatact Number</th>

<th>Gender</th>
<th>Your email</th>
<th>city</th>
<th>state</th>
<tr>


<td><?php echo $_POST["fname"]; echo " ".$_POST["lname"];?></td>

<td><?php echo $_POST["num"];?></td>
<td><?php echo $_POST["gender"]; ?></td>
<td><?php echo $_POST["email"];?></td>
<td><?php echo $_POST["city"];?></td>

<td><?php echo $_POST["state"];?></td>
</tr>
</table>
</body>
</html>