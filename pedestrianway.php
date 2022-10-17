<?php 



final class PedestrianWay extends HighWay
{
    protected array $currentVehicles;
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;


    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck) {
            return "These vehicles are not allowed on the pedestrian way !";
        } else {
            $currentVehicles[] = $vehicle;
            $this->currentVehicles = $currentVehicles;
        }
    }

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

        return $this;
    }

    /**
     * Get the value of nbLane
     */ 
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     *
     * @return  self
     */ 
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */ 
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */ 
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }
}