<?php


require_once 'Vehicle.php';


class Car extends Vehicle

{

    private bool $hasParkBrake;
  
    private string $energy;


    private int $energyLevel;


    public function __construct(string $color, int $nbSeats, string $energy)

    {

    parent::__construct($color, $nbSeats);

    $this->setEnergy($energy);
      
    }


    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];


    public function setParkBrake(bool $bool)
    {

      $this->hasParkBrake = $bool;

    }


  
    public function start()
    {
      if($this->hasParkBrake = true){
        throw new Exception('Park brake still on');
      }
      return "the car just started !";

    }

  
    public function getEnergy(): string

    {

        return $this->energy;

    }


    public function setEnergy(string $energy): Car

    {

    if (in_array($energy, self::ALLOWED_ENERGIES)) {

        $this->energy = $energy;

    }

    return $this;

    }


    public function getEnergyLevel(): int

    {

        return $this->energyLevel;

    }


    public function setEnergyLevel(int $energyLevel): void

    {

        $this->energyLevel = $energyLevel;

    }

}