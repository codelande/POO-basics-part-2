<?php


require_once 'Vehicle.php';


class Truck extends Vehicle

{

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


    public function getEnergy(): string

    {

        return $this->energy;

    }


    public function setEnergy(string $energy): Truck

    {

    if (in_array($energy, self::ALLOWED_ENERGIES)) {

        $this->energy = $energy;

    }

    return $this;

  }
}