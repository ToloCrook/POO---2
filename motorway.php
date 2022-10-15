<?php 

require 'highway.php';
require 'vehicle.php';


final class MotorWay extends HighWay
{
    private array $currentVehicles;
    private int $nbLane = 4;
    private int $maxSpeed = 130;

}