<?php

class Singleton
{
    private $fileName;
    private static $instance;
    private static $text;

    public static function getInstance() {
        if(static::$instance == null) {
            static::$instance = new Singleton();
        }
        return static::$instance;
    }

    public static function setText($text) {
        static::$text = $text;
    }
    public static function getText() {
        return static::$text;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName): void
    {
        $this->fileName = $fileName;
    }

    public function log() {
        echo "Логируем информацию!";
    }
}