<?php

echo "Aman Jha";
echo "<br>";
class Coffe{
  public function name(){
  echo "NESCAFE";
  }
  public function price(){
  echo "150 Rs/-";
  }
}

$obj = new Coffe();
$obj->name();
echo "<br>";
$obj->price();
?>