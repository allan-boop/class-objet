<?php
class Car
{
    private int $wheels = 4;
    private int $speed = 0;
    private string $color;
    private int $seats;
    private string $fuelType;
    private int $fuelLvl = 0;

    public function __construct(string $color, int $seats, string $fuelType)
    {
        $this->color = $color;
        $this->seats = $seats;
        $this->fuelType = $fuelType;
    }

    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }    

    public function getSeats(): int
    {
        return $this->seats;
    }
    public function setSeats(int $seats): void
    {
        $this->seats = $seats;
    }

    public function getFuelType(): string
    {
        return $this->fuelType;
    }
    public function setFuelType(string $fuelType): void
    {
        $this->fuelType = $fuelType;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function getFuelLvl(): int
    {
        return $this->fuelLvl;
    }
    public function setFuelLvl(int $fuelLvl): void
    {
        $this->fuelLvl = $fuelLvl;
    }

    public function getWheels(): string
    {
        return "il y à ". $this->wheels. " roues";
    }
    
    public function forward(): string
    {
        if($this->speed == 1)
        {
        return "We move !";       
        }else{
            return "We are stopped !";
        }

    }

    public function start(): string
    {
        if($this->speed == 0)
        {
            $this->speed++;
            return "Departure"; 
        }else{
            return "Ever start";
        }   
    }

    public function brake(): string 
    {
        $sentence = "";
        while ($this->speed > 0) {
            $this->speed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;        
    }

}