<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test2</title>
</head>
<h1> การใช้ POST</h1>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname"><br>
        Last Name: <input type="text" name="lname"><br>
        <input type="submit" value="submit">
    </form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_REQUEST['fname'] ?? '';
    $lname = $_REQUEST['lname'] ?? '';

    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name." ".$lname;
    }
}
?>

</body>
</html>
