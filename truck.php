<?php

require_once 'vehicle.php';

class Truck extends Vehicle
{
    private int $energyLevel;
    private int $storage;


    public function __construct (int $storage, string $color, int $nbSeats, string $energy) {
        $this->storage = $storage;
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int {
        return $this->energyLevel;
    }

    public function setEnergyLevel (int $energyLevel): void {
        $this->energyLevel = $energyLevel;
    }

    public function getStorage(): int {
        return $this->storage;
    }

    public function setStorage(int $storage): void {
        
        if ($this->storage >= 0) { 
        $this->storage = $storage;
        }
    }

    public function filling() {
        $sentence = "";
        while ($this->storage < 20) {
            $this->storage++;
            $sentence .= "In filling";
        } 
            $sentence .= "I'm full !";
             return $sentence;

    }

}

