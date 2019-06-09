<?php
include "Engine.php";
include "Car.php";
include "Driver.php";

$engine = new Engine("Bugatti", 7.9);
$driver = new Driver("Viktor", 22);
$car = new Car("Ваз-2114", 1000, 777, $engine);
$car->setDriver($driver);

$driver->ride();