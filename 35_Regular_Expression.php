<?php

$str="Hello_How_are_you";
$pattern="/hello/i";
echo "Aman jha<br>";
echo preg_match($pattern,$str);
echo "<br>";
echo preg_match_all($pattern,$str);
echo "<br>";
echo preg_match($pattern, "Aman", $str);
?>