<?php
include "Observable.php";

// Observable
class Keyboard implements Observable
{
    private $observers;

    public function __construct()
    {
        $this->observers = [];
    }

    /**
     * @return mixed
     */
    public function getObservers()
    {
        return $this->observers;
    }

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function pressKey($key)
    {
        echo "Нажата клавиша " . $key;
        $this->notifyObservers();
    }

    public function notifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->handleEvent();
        }
    }
}