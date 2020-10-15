<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    // Allowed Energies
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    
    //@var string
    private $energy;
    //@var integer
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function start() :string
    {
        $this->currentSpeed = 0;
        $this->energyLevel=100;
        return "Let's go!";
    }

    public function getEnergy() : int
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel() : int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): car
    {
        $this->energyLevel = $energyLevel;
    }
}