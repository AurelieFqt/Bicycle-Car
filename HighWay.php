<?php

abstract class HighWay 
{
    // @var array
    protected $currentVehicles=[];
    // @var integer
    protected $nbLane;
    // @var integer
    protected $maxSpeed;

    public function getCurrentVehicles() 
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles($currentVehicles) 
    {
        $this->currentVehicles[] = $currentVehicles;
    }

    public function getNbLane() : int
    {
        return $this->nbLane;
    }

    public function setNbLane()
    {
        $this->nbLane = $nbLane;
    }
    
    public function getMaxSpeed() : int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed()
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle($vehicle);
}