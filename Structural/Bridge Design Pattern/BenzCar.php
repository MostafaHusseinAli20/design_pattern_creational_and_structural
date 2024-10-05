<?php

class BenzCar extends Car
{
    public function __construct(CarColor $getColor)
    {
        parent::__construct($getColor);
    }
    public function getProduct()
    {
        return sprintf('car type is Benz and car color is Red', $this->getColor->getColor());
    }
}
// $color = new BlueColor();
// $benz = new BenzCar($color);
// echo $benz->getProduct() . "<br>";
