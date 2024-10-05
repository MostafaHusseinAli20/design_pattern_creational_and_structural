<?php

class Car {
    private $rentAt;

    public function __construct()
    {
        $this->rentAt = new \DateTime();
    } 

    public function getMovei(){
        return "Car is Moveing";
    }
}