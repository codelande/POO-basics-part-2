<?php

abstract class HighWay
  
{
    private array $currentVehicles;

    private int $nbLane;

    private int $maxSpeed;


  
   /* public function __construct(int $nbLane, int $maxSpeed)

    {

        $this->nbLane = $nbLane;

        $this->maxSpeed = $maxSpeed;

    }
  */
  
    abstract public function addVehicle(string $vehicle);


    public function getCurrentVehicles (): int

    {

        return $this->currentVehicles;

    }


    public function setCurrentVehicles($currentVehicles): void

    {

        $this->currentVehicles[] = $currentVehicles;

    }


      public function getNblane(): int

    {

        return $this->nbLane;

    }


    public function setNbLane(int $nbLane): void

    {

        $this->nbLane = $nbLane;

    }


        public function getMaxSpeed(): int

    {

        return $this->maxSpeed;

    }


    public function setMaxSpeed(int $maxSpeed): void

    {

        $this->maxSpeed = $maxSpeed;

    }

}