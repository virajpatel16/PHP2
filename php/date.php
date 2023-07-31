<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
</head>

<body>

<?php 


echo "Today is :".date("Y/m/d")."<br />";
echo "Today is :".date("Y.m.d")."<br />";

echo "Today is :".date("l")."<br />";
echo "Today is :".date("D")."<br />";

echo "Today is :".date("d")."<br />";
echo "Today is :".date("M")."<br />";
echo "Today is :".date("Y")."<br />";


echo date("l")."<br> <br><br>";
echo date("l js \of F Y h:i:s A")."<br> <br><br>";
echo "oct 3,1975 was on a".date("l",mktime(0,0,0,10,3,1975))."<br><br>";
echo date(DATE_RFC822)."<br><br><br>";
echo date(DATE_ATOM,mktime(0,0,0,10,3,1975))."<br><br>";
$t=time();
echo($t."<br><br><br>");
echo(date("Y-m-d",$t));

$nextweek = time() + (7 * 24 * 60 * 60);
echo 'Now:'.date('Y-m-d',$nextweek)."";















?>

</body>
</html>