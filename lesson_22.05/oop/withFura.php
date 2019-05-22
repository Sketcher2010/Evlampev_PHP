<?php

include "Fura.php";

$myFura = new Fura("5", "green", 6);
$myFura->goForward();
echo "\n";
$myFura->getVin();
$myAuto = new Auto("1,6", "black");