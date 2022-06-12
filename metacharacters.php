<?php

echo "Aman Jha";
echo "<br>";
$string="PHP is my favorite language.";
$exp = preg_match_all("/php|web|the/i",$string,$array);
if($exp)
{
    echo "A match was found";
}
else
{
    echo "A match was not found";
}
echo "<pre>";
print_r($array);
echo "</pre>";
echo $array[0][0];

?>