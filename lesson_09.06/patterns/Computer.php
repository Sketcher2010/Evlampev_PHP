<?php
include "Observer.php";

// Observer
class Computer implements Observer
{
    public function handleEvent() {
        echo "Кто-то нажал на клавиатуру 0_0";
    }
}