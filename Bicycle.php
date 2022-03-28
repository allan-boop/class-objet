<?php
class Bicycle
{
    private string $color;
    private bool $luggageRack;
    private int $speed;
    private int $nbPlace = 1;
    private int $nbWheels = 2;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
{
    $this->color = $color;
}

public function getSpeed(): int
{
    return $this->speed;
}

public function setSpeed(int $speed): void
{
    $this->speed = $speed;
}


    public function forward(): string
{
    $this->speed = 15;

    return "Go !";
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