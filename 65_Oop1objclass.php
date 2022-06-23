<?php

echo "Aman Jha<br>";


class calculation{
    public $s, $q, $r;
    function sum(){
        $this->r =  $this-> s +  $this-> q;
        return $this -> r;
    }
    function sub(){
        $this->r =  $this-> s -  $this-> q;
        return $this -> r;
    }
}
$c1 = new calculation();
$c1->s = 20;
$c1->q = 40;

$c2 =new calculation();
$c2->a = 60;
$c2->b = 40;

echo "sum value of c1: ". $c1-> sum();
echo "<br>";
echo "subtraction value of c2: ". $c2-> sub();
echo "<br>";
echo "sum value of c1: ". $c1-> sub();
echo "<br>";
?>