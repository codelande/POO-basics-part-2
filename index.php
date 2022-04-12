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

$car->setParkBrake(true);

try{
  echo $car->start();
}catch(Exception $e){

    $car->setParkBrake(false);

} finally {

    echo 'Ma voiture roule comme un donut';

}







 ?> 
  </body>
</html>