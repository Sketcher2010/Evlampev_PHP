<?php

class Channel
{
    private $name;
    private $number;
    private $broadcasts;
    private $currentBroadcast;

    public function __construct($name, $number)
    {
        $this->name = $name;
        $this->number = $number;
        $this->broadcasts = array();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number): void
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getBroadcasts()
    {
        return $this->broadcasts;
    }

    public function addBroadcast($broadcast): void
    {
        $this->broadcasts[] = $broadcast;
    }

    /**
     * @return mixed
     */
    public function getCurrentBroadcast(): Broadcast
    {
        /*
         * Код, если бы мы указывали конкретное время вещания передачи
        $currentTime = new DateTime();
        foreach ($this->broadcasts as $broadcast) {
            if($currentTime > $broadcast->getStartTime() and
            $currentTime < $broadcast->getEndTime()) {
                return $broadcast;
            }
        } */
        return $this->currentBroadcast;
    }

    /**
     * @param mixed $currentBroadcast
     */
    public function setCurrentBroadcast($currentBroadcast): void
    {
        $this->currentBroadcast = $currentBroadcast;
    }
}