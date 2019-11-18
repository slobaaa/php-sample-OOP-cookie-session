<?php
class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    function moveWheels() {
        $this->wheels = 10;
    }
}
if (method_exists("Car","moveWheels")) {
    echo "Postoji ta metoda";
    
} else {
    echo "Ne postoji ta metoda";
}
$bmw = new Car();
// echo $bmw->wheels;
echo $bmw->moveWheels();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>