<?php

echo "Aman jha<br>";
$arr = array ("Aman"=>"19", "Ansh"=>"17", "Abhishek"=>"3");
asort($arr);
foreach($arr as $x=> $x_value)
{
    echo "key=".$x.",value=".$x_value;
    echo "<br>";
}
?>