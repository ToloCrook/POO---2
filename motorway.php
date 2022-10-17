<?php 

require 'highway.php';


final class MotorWay extends HighWay
{
     protected array $currentVehicles;
     protected int $nbLane = 4;
     protected int $maxSpeed = 130;

     /**
      * Get the value of currentVehicles
      */ 
     public function getCurrentVehicles()
     {
          return $this->currentVehicles;
     }

     /**
      * Set the value of currentVehicles
      *
      * @return  self
      */ 
     public function setCurrentVehicles($currentVehicles)
     {
          $this->currentVehicles = $currentVehicles;

        
     }


    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bycicle || $vehicle instanceof Skateboard) {
            return 'These vehicles are not allowed on the motorway !';
        }   else {
          $currentVehicles[] = $vehicle;
          $this->currentVehicles = $currentVehicles;          
    }
    }
     
}  
