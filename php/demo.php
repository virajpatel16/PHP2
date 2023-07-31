<?php

class car{
    public $color ;
    public $model;

    public function __construct($color,$model){
        $this->color=$color;
        $this->model=$model;

    }
    public function messge(){
        return "My car is a ".$this->color." ".$this->model."!";
    }
}

$mycar = new Car("black","volo");
echo $mycar ->messge();
echo "<br>";
$mycar = new Car("red","toyoo");
echo $mycar ->messge();













?>