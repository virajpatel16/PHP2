<?php 

function abosulate($degree){
    return (abs($degree))."absolute value<br><br><br>";
}
$number  = -8.4;
echo(abosulate($number))."<br><br><br>";

echo (pi())."radim values<br><br><br>";

function result ($x,$y)
{
    return fmod($x,$y)."find module <br><br><br>";

}
$x=5.7;
$y=1.3;

echo (result($x,$y))."floor <br><br><br>";
echo (floor(0.60)."\n")."floor <br><br><br>";
echo (floor(5)."\n");
echo (floor(-5.9));
echo(ceil(0.60)."\n")."ceil <br><br><br>";
echo(ceil(-5.9));
echo (round(1.95583,2)."\n")."round1 <br><br><br>";
echo (round(1241757,-3)."\n");
echo (round(9.5,0,PHP_ROUND_HALF_UP)."\n")."\n";
echo (round(9.5,0,PHP_ROUND_HALF_DOWN)."\n")."\n";
echo (round(9.5,0,PHP_ROUND_HALF_EVEN)."\n")."\n";
echo (round(9.5,0,PHP_ROUND_HALF_ODD)."\n")."\n";
echo (sqrt(16)."sqrt<br/>");
echo (sqrt(25)."<br/>");
echo (sqrt(7)."<br/>");

 

















?>