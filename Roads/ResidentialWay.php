<?php

require_once 'HighWay.php';
require_once '/home/runner/POO-basics-part-2/Vehicles/Vehicle.php';


final class ResidentialWay extends HighWay

{
  public const NB_LANE = 2;
  public const MAX_SPEED = 50;

  private int $nbLane = self::NB_LANE;
  private int $maxSpeed = self::MAX_SPEED;


 public function addVehicle($vehicle)
  { if ($vehicle instanceof Vehicle){
    $this->setCurrentVehicles($vehicle);
  }
  }
}