<?php
include "Computer.php";
include "Keyboard.php";

$computer = new Computer();
$keyboard = new Keyboard();
$keyboard->addObserver($computer);
$keyboard->pressKey("enter");