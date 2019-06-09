<?php
include "Singleton.php";

$single = Singleton::getInstance();

$single->setFileName("Log.txt");

$secondSingle = Singleton::getInstance();
echo $secondSingle->getFileName();
$secondSingle->log();