<?php

echo "Aman Jha<br>";
$cars= array(
    array("volvo",13,18),
    array("BMW",5,2),
    array("MINI COOPER",20,22),
    array("Hyudai",17,15),
);
for ($row = 0; $row < 3; $row++){
    echo "<p><b> row number $row ,</b> </p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++){
        echo "<li>" . $cars [$row][$col]. "</li>";
    }
    echo "</ul>";
}
?>