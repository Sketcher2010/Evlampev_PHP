<?php
include "Tv.php";
include "Channel.php";
include "Broadcast.php";

$myTv = new Tv();

$channel1 = new Channel("Первый", 1);
$bc1 = new Broadcast("Давай поженимся 0_о");
$bc2 = new Broadcast("Время");
$channel1->addBroadcast($bc1);
$channel1->addBroadcast($bc2);
$channel1->setCurrentBroadcast($channel1->getBroadcasts()[0]);

$channel2 = new Channel("Россия", 2);
$bc3 = new Broadcast("Вести");
$bc4 = new Broadcast("Фиксики");
$channel2->addBroadcast($bc3);
$channel2->addBroadcast($bc4);
$channel2->setCurrentBroadcast($channel2->getBroadcasts()[0]);


$myTv->addChannel($channel1);
$myTv->addChannel($channel2);

$myTv->switchChannel(2);

echo $myTv
    ->getCurrentChannel()
    ->getCurrentBroadcast()
    ->getName();