<?php

require_once 'HighWay.php';


final class MotorWay extends HighWay
{
    protected $nbLane = 4;
    protected $maxSpeed = 130;
    
    

    public function addVehicle($vehicle){
        if($vehicle instanceof Car){
            parent::setCurrentVehicles($vehicle);
        }
    }
}