<?php
/**
 * Created by PhpStorm.
 * User: 01
 * Date: 09.06.2019
 * Time: 17:57
 */

class Document
{
    private $title;
    private $cost;
    private $executor;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param mixed $cost
     */
    public function setCost($cost): void
    {
        $this->cost = $cost;
    }

    /**
     * @return UserInterface
     */
    public function getExecutor()
    {
        return $this->executor;
    }

    /**
     * @param UserInterface $executor
     */
    public function setExecutor(UserInterface $executor): void
    {
        $this->executor = $executor;
    }

}