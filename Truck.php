<?php


require_once 'Vehicle.php';


class Truck extends Vehicle

{

    private string $energy;

    private int $energyLevel;

    private int $storageCapacity;
  
    private int $storageLevel;

  

    public function checkStorage(): string

    {

        $sentence = "";

        if ($this->storageLevel < $this->storageCapacity) {

            $sentence .= "In filling !";

            return $sentence;

        }

        else{
          
        $sentence .= "Full !";

        return $sentence;
        }

    }


  
    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)

    {

    parent::__construct($color, $nbSeats);

    $this->setEnergy($energy);

    $this->storageCapacity = $capacity;


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

  
    public function getStorageCapacity(): int

    {

        return $this->storageCapacity;

    }



    public function setStorageCapacity(int $storageCapacity): void

    {

        $this->storageCapacity = $storageCapacity;

    }




  
    public function getStorageLevel(): int

    {

        return $this->storageLevel;

    }


    public function setStorageLevel(int $storageLevel): void

    {

        $this->storageLevel = $storageLevel;

    }
}