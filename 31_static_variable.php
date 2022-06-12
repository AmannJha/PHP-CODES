<?php
echo "Aman jha<br>";
function myfun(){
   static $x=10;
   echo "$x";
   echo "<br>";
   $x++;
   echo "$x";
   echo "<br>";
}
myfun();
myfun();
myfun();
myfun();
?>