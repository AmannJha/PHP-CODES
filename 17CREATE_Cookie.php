<?php

$cookie_name="jha";
$cookie_value="Aman Jha";

setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");

?>
<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie is not set";
        }else{
            echo  $_COOKIE[$cookie_name];
        }
        ?>
</body>
</html>