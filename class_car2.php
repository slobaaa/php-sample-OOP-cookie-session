<?php
class Car {
    function moveWheels() {
        echo "Pokrece se tocak";
    }
}
if (method_exists("Car","moveWheels")) {
    echo "Postoji ta metoda";
} else {
    echo "Ne postoji ta metoda";
}

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