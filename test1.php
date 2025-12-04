<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leb3.2</title>
</head>
<body>
    <h1> ทดสอบ PHP $GLOBALS </h1>
    <?php
       $x = 75;
       $y = 25;

       function addition() {
           $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
       }

       addition();
       echo $z;
    ?>

    <h1> ทดสอบ PHP $_SERVER </h1>
    <?php
       echo $_SERVER['PHP_SELF'];
       echo "<br>";
       echo $_SERVER['SERVER_NAME'];
       echo "<br>";
       echo $_SERVER['HTTP_HOST'];
       echo "<br>";
       echo $_SERVER['HTTP_USER_AGENT'];
       echo "<br>";
       echo $_SERVER['SCRIPT_NAME'];
       echo "<br>";

    ?>
</body>
</html>
