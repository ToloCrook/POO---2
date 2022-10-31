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
require_once 'truck.php';
require_once  'motorway.php';
require_once 'pedestrianway.php';
require_once 'residentialway.php';

$truck = new Truck(0, "red", 3, "fuel");
$car = new Car("red", 5, 'electric');
$motorway = new Motorway();
$bycicle = new Bycicle("yellow", 1);
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();

$residentialWay->addVehicle($car);

$pedestrianWay->addVehicle($bycicle);

$car->setHasParkBrake(true);

try {
    $car->start();
} catch(\Exception $e) {
    $car->setParkBrake();
} finally {
    echo 'Ma voiture roule comme un donut';
}

var_dump($car->start());
 






?>


</body>
</html>