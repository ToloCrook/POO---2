<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

require_once 'car.php';
require_once 'bycicle.php';
require_once 'vehicle.php';
require_once 'truck.php';

$truck1 = new Truck(0, "red", 3, "fuel");

echo $truck1->filling();


?>


</body>
</html>