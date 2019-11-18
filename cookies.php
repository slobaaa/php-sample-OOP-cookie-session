<?php
//SET COOKIE
    $name = "SomeName";
    $value = 100;
    $expiration = time() + (60*60*24*7); // sec * minut * hours * dana
    setcookie($name,$value,$expiration);

    //READ COOKIE
    if (isset($_COOKIE["SomeName"])) {
       $someOne = $_COOKIE["SomeName"] ;
       echo $someOne;
    } else {
        $someOne="";
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