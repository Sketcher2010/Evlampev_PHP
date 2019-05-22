<?php
/**
 * Created by PhpStorm.
 * User: 01
 * Date: 22.05.2019
 * Time: 20:57
 */

class Calculator
{
    private $a;
    private $b;
    private $action;

    /**
     * Calculator constructor.
     * @param $a
     * @param $b
     * @param $action
     */
    public function __construct($a, $b, $action)
    {
        $this->a = $a;
        $this->b = $b;
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @param mixed $a
     */
    public function setA($a): void
    {
        $this->a = $a;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @param mixed $b
     */
    public function setB($b): void
    {
        $this->b = $b;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action): void
    {
        $this->action = $action;
    }

    public function doAction()
    {
        if ($this->action == "+") {
            echo $this->a + $this->b;
        }
        if ($this->action == "-") {
            echo $this->a - $this->b;
        }
        if ($this->action == "*") {
            echo $this->a * $this->b;
        }
        if ($this->action == "/") {
            echo $this->a / $this->b;
        }
    }
}