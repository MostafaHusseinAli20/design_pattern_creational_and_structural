<?php

class CarMarsedsBenz implements CarPriceInterface{
    private $price;
    private $tax;
    public function __construct($price, $tax)
    {
        $this->price = $price + $this->tax = $tax + 200000;
    }
    public function price(){
       return $this->price;
    }
    public function display(){
       echo "<br>Car Marceds Benz: $this->price";
    }
}