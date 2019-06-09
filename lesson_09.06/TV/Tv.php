<?php

class Tv
{
    private $channels;
    private $currentChannel;

    public function __construct()
    {
        $this->channels = array();
    }

    public function getChannels()
    {
        return $this->channels;
    }

    public function addChannel(Channel $channel)
    {
        $this->channels[$channel->getNumber()] = $channel;
    }

    public function switchChannel($channelNumber)
    {
        $this->currentChannel = $this->channels[$channelNumber];
    }

    public function getCurrentChannel(): Channel
    {
        return $this->currentChannel;
    }
}