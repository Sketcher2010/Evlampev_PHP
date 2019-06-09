<?php

class Broadcast
{
    private $name;
    // Время начала
//    Время окончания программы

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

}