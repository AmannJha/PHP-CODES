<?php
echo "Aman jha";
$x=20;
function myfun(){
    $y=30;
    echo "$y <br>";
    echo $GLOBALS['x']."<br>";
}
myfun();
echo"$x<br>";
?>