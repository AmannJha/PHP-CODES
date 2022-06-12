<?php
echo "Aman jha<br>";

session_start();
$_SESSION["LOG IN"]="Succesfull";
echo "Session Start";
if(isset($_SESSION["LOG IN"]));
{
    echo "Sucessfull";
}
session_destroy();
?>