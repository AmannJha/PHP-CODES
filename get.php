<!doctype html>
<html>
    <head><title>Form page</title></head>
    <body>
        <form action="21_testform.php" method="get">
            NAME: <input type="text" name="firstname"><br><br>
            AGE: <input type="text"  name="Age"> <br><br>
            MOBILE: <input type="text" name="mobile"><br><br>
            <input type="Submit" name="Submit"><br><br>

        </form>
    </body>
    </html>
    <?php
    
    if(issest($_GET['submit']))
    {
        echo $_GET['name'];
        echo $_GET['roll no'];
    }
    ?>