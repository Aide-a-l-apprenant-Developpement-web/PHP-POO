<?php

class Vehicle
{
    protected  int $currentSpeed = 0;

    public function __construct(
        protected  string $color,
        protected  int $nbSeats,
        protected  int $nbWheels,
    ) {}

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @return string
     */
    public function start(): string
    {
        return "Tu es à l'arrêt !";
    }

    /**
     * @return string
     */
    public function forward(): string
    {
        $this->currentSpeed += 10;

        return "Tu accélères. Vitesse actuelle : ".$this->currentSpeed." km/H";
    }

    /**
     * @return string
     */
    public function brake(): string
    {
        $this->currentSpeed -= 10;
        if($this->currentSpeed == 0){
            return "Tu freines. Tu es à l'arrêt";
        }
        return "Tu freines. Vitesse actuelle : ".$this->currentSpeed." km/H";
    }
}