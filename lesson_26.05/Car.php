<?php
/**
 * Created by PhpStorm.
 * User: 01
 * Date: 26.05.2019
 * Time: 18:12
 */

class Car
{
    private $isEngineStarted;
    private $gear;
    private $isMoving;

    public function __construct()
    {
        $this->isEngineStarted = false;
        $this->gear = 0;
        $this->isMoving = false;
    }

    public function start() {
        if($this->isEngineStarted == false
            and $this->gear == 0
            and $this->isMoving == false) {
            $this->isEngineStarted = true;
        }
    }

    public function stop() {
        if($this->isEngineStarted == true
            and $this->isMoving == false) {
            $this->isEngineStarted = false;
        }
    }

    public function setGear($gear) {
        $this->gear = $gear;
    }

    public function startMoving() {
        if(
            $this->isEngineStarted == true
            and
            ($this->gear == 1 or $this->gear == -1)
        ) {
            $this->isMoving = true;
        }
    }
}

$car = new Car();

$car->start();
$car->setGear(1);
$car->startMoving();