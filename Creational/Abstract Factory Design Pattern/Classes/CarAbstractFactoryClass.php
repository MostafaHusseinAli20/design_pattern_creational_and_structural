<?php


class CarAbstractFactory {
    private $price;
    private $tax;
    public function __construct($price, $tax) 
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    public function createBmwCar(): CarBmw
    {
        return new CarBmw($this->price);
    }

    public function createMercedesBenzCar(): CarMarsedsBenz
    {
        return new CarMarsedsBenz($this->price, $this->tax);
    }
}

// $bnz = new CarBmw(800000);
// $bnz->display();
// $bnz = new CarMarsedsBenz(800000, 350000);
// $bnz->display();