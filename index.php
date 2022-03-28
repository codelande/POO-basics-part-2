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



$truck = new Truck('black', 12, 'gas', 5);

$truck->setStorageCapacity(500);
$truck->setStorageLevel(200);
echo $truck->checkStorage();




var_dump($truck);



 ?> 
  </body>
</html>