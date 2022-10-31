<?php

require_once 'vehicle.php';

class Car extends Vehicle
{

    private bool $hasParkBrake;

    public const ALLOWED_ENERGIES = [
        "fuel",
        "electric",
    ];
    
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
       
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
   
    }

    public function setParkBrake() 
    {
        if ($this->hasParkBrake = true) {
            $this->setHasParkBrake(false);
        } if ($this->hasParkBrake = false) {
            $this->setHasParkBrake(true);
        }
    }

    public function start()
    {
        if ($this->gethasParkBrake() === true) {
            throw new \Exception('Your brake is on !!');
        }
        
        $this->currentSpeed = 0;
            $sentence= "";
            while ($this->currentSpeed <= 0) {
                $this->currentSpeed++;
                $sentence .= "Let's start this vehicle";
            }
            return $sentence;
    }



    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        
            $this->energy = $energy;
        
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * Get the value of hasParkBrake
     */ 
    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @return  self
     */ 
    public function setHasParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }
}

?>