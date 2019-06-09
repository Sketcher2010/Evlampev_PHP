<?php
/**
 * Created by PhpStorm.
 * User: 01
 * Date: 09.06.2019
 * Time: 18:52
 */

class Engine
{
    private $brand;
    private $volume;

    private $car;

    /**
     * Engine constructor.
     * @param $brand
     * @param $volume
     */
    public function __construct($brand, $volume)
    {
        $this->brand = $brand;
        $this->volume = $volume;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param mixed $volume
     */
    public function setVolume($volume): void
    {
        $this->volume = $volume;
    }

    /**
     * @return Car
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * @param Car $car
     */
    public function setCar(Car $car): void
    {
        $this->car = $car;
    }

    public function start() {
        echo "Ура, поехали!";
    }
}