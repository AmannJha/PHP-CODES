<?php

echo "Aman Jha";
echo "<br>";
session_start();
print_r($_SESSION);
?>
<html>
    <head>
        <title>

        </title>
</head>
<body>
   <?php
   echo "favorite color:" .$_SESSION["favcolor"];
   ?> 
</body>
</html>