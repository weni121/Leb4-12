<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leb3 Array(4/12/68)</title>
</head>
<body>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>

    <h1> ทดสอบ Array แบบ Associative Array</h1>
    <?php
        $name = array("35"=>"Peter", "25"=>"Ben", "24"=>"Joe");
        echo "Age is 35". "is". $name['35']. "<br>";
        echo "Age is 25". "is". $name['25']. "<br>";
        echo "Age is 35". "is". $name['24']. "<br>";
    ?>

    <h1> การใช้ For กับ Index Array </h1>
    <?php
        $fruits = array("แอปเปิ้ล","มะละกอ","ส้ม","กล้วย",
        "องุ่น","แตงโม","ลำไย","มะพร้าว");
        $arrlen = count($fruits);

        for($x =0; $x < $arrlen; $x++){
            echo $fruits[$x];
            echo"<br>\n";
        }
    ?>

    <h1> การใช้ Foreach กับ Array </h1>
    <?php
        $fruits = array("แอปเปิ้ล","มะละกอ","ส้ม","กล้วย",
        "องุ่น","แตงโม","ลำไย","มะพร้าว");

        foreach($fruits as $value){
            echo $value;
            echo"<br>\n";
        }
    ?>

    <h1> ทดสอบ Foreach กับ Array แบบ Associative Array</h1>
    <?php
        $name = array("35 Yeas"=>"Peter", "25 Yeas"=>"Ben", 
        "24 Yeas"=>"Joe", "20 Yeas"=>"We");
        foreach($name as $x => $x_value){
            echo $x. "คืออายุของ".$x_value;
            echo"<br>\n";
        }
    ?>
    <h1> ทดสอบ Two-dimensional Arrays </h1>
    <?php
    $cars = array(
        array("Volvo", 22, 18),
        array("Toyota", 15, 13),
        array("BMW", 5, 2),
        array("LandRover", 17, 15)
    );
    $rows = count($cars); 
    for ($row = 0; $row < $rows; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        $cols = count($cars[$row]);
        for ($col = 0; $col < $cols; $col++) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }
    ?>
    
</body>
</html>