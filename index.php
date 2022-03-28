<?php
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

?>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 


$car = new Car('green', 4, 'fuel');


var_dump($car);


$truck = new Truck('black', 12, 'gas');

var_dump($truck);

 ?> 
  </body>
</html>