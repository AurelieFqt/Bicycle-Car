<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    //@var integer
    private $storageCapacity;
    //@var integer
    private $cargo;

     // Allowed Energies
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function getEnergy() : int
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    public function getStorageCapacity() : int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity) : Truck
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getCargo() : int
    {
        return $this->cargo;
    }

    public function setCargo(int $cargo)
    {
        $this->cargo = $cargo;
    }
    
    public function cargoLevel() : string
    {
        if($this->cargo < $this->storageCapacity){
           return "in filling";
        }elseif($this->cargo === $this->storageCapacity){
           return "full !";
        }
       
    }
}
