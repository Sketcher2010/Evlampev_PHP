<?php

interface UserInterface
{
    public function logout();
    public function setName($name);
    public function getName();
}