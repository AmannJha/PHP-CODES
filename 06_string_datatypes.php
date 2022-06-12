<?php
echo "Aman Jha";
echo "<br>";
$name="Aman jha is a very honest boy";
echo $name;
echo "<br>";
echo "The length of the word" . strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "honest");
echo "<br>";
echo str_replace("honest", "handsome",$name);
echo "<br>";
echo str_repeat($name, 5);
?>