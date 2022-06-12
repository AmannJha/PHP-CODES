<?php

echo "Aman jha<br>";
$arr=array("Aman"=>"19","Ansh"=>"18","abhishek"=>"3");
ksort($arr);
foreach($arr as $x=> $x_value)
{
    echo "key=".$x.",value=".$x_value;
    echo "<br>";
}
?>