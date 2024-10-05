<?php

abstract class Car {
    protected $getColor;
    public function __construct(CarColor $getColor)
    {
        $this->getColor = $getColor;
    }
    public abstract function getProduct();
}