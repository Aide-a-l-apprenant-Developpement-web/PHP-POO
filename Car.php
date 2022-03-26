<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private  int $energyLevel = 100;

    public function __construct(
        private  string $energy,
  ) {}

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     * @return Car
     */
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
}