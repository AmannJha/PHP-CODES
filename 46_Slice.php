<?php

echo "Aman jha<br>";
$arr=array("1"=>"Aman","2"=>"Ansh","3"=>"Rohan","4"=>"Abhishek","5"=>"Sumit");
$sl=array_slice($arr,2,2,true);
$ic=array_slice($arr,2);
print_r($sl);
print_r($ic);
?>