<?php
require_once 'Vehicles/Car.php';
require_once 'Vehicles/Bicycle.php';
require_once 'Vehicles/Truck.php';

require_once 'Roads/MotorWay.php';
require_once 'Roads/ResidentialWay.php';
require_once 'Roads/PedestrianWay.php';



?>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 


$car = new car('black', 5, 'gas');



$road = new ResidentialWay;
$road->addVehicle($car);
var_dump($road);




 ?> 
  </body>
</html>