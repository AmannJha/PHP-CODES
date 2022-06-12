<?php

$arr=array(1=>"hello",2=>"hii",3=>"fine",4=>"hey",5=>"Aman Jha");
$sl=array_splice($arr,2,2,true);
$ic=array_splice($arr,2);
print_r($sl);
print_r($ic);
?>