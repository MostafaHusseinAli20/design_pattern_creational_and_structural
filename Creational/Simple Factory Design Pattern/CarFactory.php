<?php

class CarFactory {
    public function createCar(string $type)
    {
        return new Car($type);
    }   
}
// $car_factory = new CarFactory();
// $creator1 = $car_factory->createCar('BMW');
// echo $creator1->getType() . "<br>";

// $creator1 = $car_factory->createCar('Benz');
// echo $creator1->getType();