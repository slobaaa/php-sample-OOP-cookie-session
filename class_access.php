<?php
class Car {
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 2;
    var $doors = 4;
    function moveWheels() {
        $this->wheels = 10;
        echo "neka prouka";
    }

    function showProperty() {
        echo $this->engine;
    }
}

$auto = new Car();
// echo $auto->wheels; // 4
// echo $auto->hood; // error
// echo $auto->engine; // error

$auto->showProperty();
$semi = new Semi();
$semi->showProperty();
class Semi extends Car {
    function showProperty() {
        // echo $this->engine; // ovo bi bio error jer je private
        echo $this->hood; // mzoe jer je protected
    }
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