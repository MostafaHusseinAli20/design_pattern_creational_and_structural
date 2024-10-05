<?php

class CarBmw implements CarPriceInterface{
    private $price;
    public function __construct($price)
    {
        $this->price = $price + 160000;
    }
    public function price(){
        return $this->price;
    }
    public function display()
    {
        echo "Car BMW: $this->price";
    }
}