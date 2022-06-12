<?php

echo "Aman jha";
echo "<br>";
$email ="amanjha9990@gmail.com";
$email= filter_var($email,FILTER_SANITIZE_EMAIL);
if(!filter_var($email,FILTER_VALIDATE_EMAIL)===true)
{
    echo("$email is a valid email address");
}
else{
    echo("$email is not valid email address");

}
?>