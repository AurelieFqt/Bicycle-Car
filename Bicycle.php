<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle
{
    // ------------------------POO5-----------------------

    public function switchOn():bool
    {
        if($this->currentSpeed > 10){
            $switch = true;
        }else{
            $switch = false;
        }
        return $switch;
    }
    public function switchOff():bool
    {
        return false;
    }
}