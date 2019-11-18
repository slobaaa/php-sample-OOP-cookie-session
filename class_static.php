<?php
class Car {
    static $wheels = 4;
    var $hood = 1;
    function moveWheels() {
        Car::$wheels = 10;
    }
}
if (method_exists("Car","moveWheels")) {
    echo "Postoji ta metoda";
    
} else {
    echo "Ne postoji ta metoda";
}
$bmw = new Car();
// echo $bmw->moveWheels();
echo Car::$wheels;
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