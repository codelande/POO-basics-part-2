<?php

require_once 'HighWay.php';
require_once '/home/runner/POO-basics-part-2/Vehicles/Vehicle.php';


final class MotorWay extends HighWay

{
  public const NB_LANE = 4;
  public const MAX_SPEED = 130;

  private int $nbLane = self::NB_LANE;
  private int $maxSpeed = self::MAX_SPEED;


  public function addVehicle($vehicle)
  { if ($vehicle instanceof Vehicle){
     if (!($vehicle instanceof Bike) || !($vehicle instanceof Skateboard) ){
           $this->setCurrentVehicles($vehicle);

     }
  }
  }
}