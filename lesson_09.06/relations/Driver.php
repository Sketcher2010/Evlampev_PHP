<?php

class Driver
{
    private $name;
    private $age;

    private $currentCar;
    private $cars;

    /**
     * Driver constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        $this->cars = array();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return Car
     */
    public function getCurrentCar()
    {
        return $this->currentCar;
    }

    /**
     * @param Car $currentCar
     */
    public function setCurrentCar(Car $currentCar): void
    {
        $this->currentCar = $currentCar;
    }

    /**
     * @return array
     */
    public function getCars()
    {
        return $this->cars;
    }

    /**
     * @param Car $car
     */
    public function addCar(Car $car): void
    {
        $this->cars[] = $car;
    }

    public function ride() {
        $this->currentCar->beginMove();
    }
}