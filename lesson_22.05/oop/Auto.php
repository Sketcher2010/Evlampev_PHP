<?php

class Auto
{
    public $color;
    private $VIN;
    private $volume;
    public $wheelCount;

    public function __construct($volume, $color = "White")
    {
        $this->VIN = rand();
        $this->volume = $volume;
        $this->color = $color;
    }

    public function goForward()
    {
        echo "Движение вперед!";
    }

    public function getVin()
    {
        echo $this->VIN;
    }

    public function setColor($newColor)
    {
        echo "Перекрашиваем машину с "
            . $this->color . " на "
            . $newColor . "!\n";
        $this->color = $newColor;
    }

    public function getVolume()
    {
        return $this->volume;
    }
}