<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test3</title>
</head>
 <h1> การใช้ GET</h1>
<body>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname"><br>
        Last Name: <input type="text" name="lname"><br>
        <input type="submit" value="submit">
    </form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "GET"){
    if (isset($_GET['fname']) && isset($_GET['lname'])){
        $name = $_GET['fname'] ?? '';
        $lname = $_GET['lname'] ?? '';

    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name." ".$lname;
        }
    }
}
?>

</body>
</html>
