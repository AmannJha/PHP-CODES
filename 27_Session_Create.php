<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["favcolor"] = "blue";
echo "Session variables are set.";
?>

</body>
</html>