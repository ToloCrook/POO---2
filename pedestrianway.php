<?php 

require 'highway.php';
require 'vehicle.php';


final class PedestrianWay extends HighWay
{
    private array $currentVehicles;
    private int $nbLane = 1;
    private int $maxSpeed = 10;

}