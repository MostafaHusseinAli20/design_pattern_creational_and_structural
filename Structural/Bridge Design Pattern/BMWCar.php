<?php

class BMWCar extends Car
{
    public function __construct(CarColor $getColor)
    {
        parent::__construct($getColor);
    }
    public function getProduct()
    {
        return sprintf('car type is BMW and car color is Blue', $this->getColor->getColor());
    }
}
// $color = new RedColor();
// $benz = new BMWCar($color);
// echo $benz->getProduct();