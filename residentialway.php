<?php

require 'highway.php';
require 'vehicle.php';


final class ResidentialWay extends HighWay
{
    private array $currentVehicles;
    private int $nbLane = 2;
    private int $maxSpeed = 50;

}