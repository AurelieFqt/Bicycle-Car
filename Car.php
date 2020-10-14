<?php

class Car{
    //@var integer
    private $nbWheels;
    //@var integer
    private $currentSpeed;
    //@var string
    private $color;
    //@var integer
    private $nbSeats;
    //@var string
    private $energy;
    //@var integer
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy){
        $this->color = $color;
        $this->nbSeat = $nbSeats;
        $this->energy = $energy;
    }

    public function start() :string
    {
        $this->currentSpeed = 0;
        $this->energyLevel=100;
        return "Let's go!";
    }

    public function forward() :string
    {
        $sentence = "";
        while ($this->currentSpeed <= 50){
            $this->currentSpeed+= 10;
            $this->energyLevel-=2;
            $sentence .= "Go!";
        }
        $sentence .= "Too fast!";
        return $sentence;
    }

    public function brake() : string
    {
        $sentence = "";
        while ($this->currentSpeed > 0){
            $this->currentSpeed -= 10;
            $sentence .= "Brake !!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getNbWheels() : int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed() : int 
    {
        return $this->currentSpeed;
    }

    public function getColor() : string
    {
        return $this->color;
    }

    public function getNbSeats() : int
    {
        return $this->nbSeats;
    }

    public function getEnergy() : int
    {
        return $this->energy;
    }

    public function getEnergyLevel() : int
    {
        return $this->energyLevel;
    }
}