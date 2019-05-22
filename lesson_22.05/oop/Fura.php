<?php

include "Auto.php";

class Fura extends Auto
{
    public function __construct($volume, $color = "White", $wheelCount = 18)
    {
        parent::__construct($volume, $color);
        $this->wheelCount = $wheelCount;
    }
}