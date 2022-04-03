<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $stockageCapacity;
    private int $chargement = 0;

    public function __construct(int $stockageCapacity, string $color, int $nbSeats, string $energy){
        parent::__construct($color, $nbSeats);
        $this->stockageCapacity = $stockageCapacity;
        $this->energy = $energy;

    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getChargement(){

        return $this->chargement;
    }
    
    public function setChargement(int $chargement){
        $this->chargement += $chargement;
        
        return $chargement;
    }

    public function checkIfFull(){
        if($this->chargement === $this->stockageCapacity){
            return "C'est plein !";
        }
        return $this->chargement."/".$this->stockageCapacity;
    }

    /**
     * @return int
     */
    public function getStockageCapacity(): int
    {
        return $this->stockageCapacity;
    }

    /**
     * @param int $stockageCapacity
     */
    public function setStockageCapacity(int $stockageCapacity): void
    {
        $this->stockageCapacity = $stockageCapacity;
    }
}