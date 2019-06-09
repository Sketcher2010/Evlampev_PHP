<?php

class Car
{
    private $model;
    private $weight;
    private $carNumber;

    private $driver;
    private $engine;

    /**
     * Car constructor.
     * @param $model
     * @param $weight
     * @param $carNumber
     * @param $engine
     */
    public function __construct($model, $weight, $carNumber, $engine)
    {
        $this->model = $model;
        $this->weight = $weight;
        $this->carNumber = $carNumber;
        $this->engine = $engine;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model): void
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getCarNumber()
    {
        return $this->carNumber;
    }

    /**
     * @param mixed $carNumber
     */
    public function setCarNumber($carNumber): void
    {
        $this->carNumber = $carNumber;
    }

    /**
     * @return Driver
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * @param Driver $driver
     */
    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
        $driver->addCar($this);
        $driver->setCurrentCar($this);
    }

    /**
     * @return Engine
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @param Engine $engine
     */
    public function setEngine(Engine $engine): void
    {
        $this->engine = $engine;
        $engine->setCar($this);
    }

    public function beginMove() {
        $this->engine->start();
    }
}