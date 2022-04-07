<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(4,130);
    }

    public function addVehicle(?Vehicle $vehicle) {

        !$vehicle instanceof Car ?: $this->setCurrentVehicles([$vehicle]);
        !$vehicle instanceof Truck ?: $this->setCurrentVehicles([$vehicle]);
    }
}