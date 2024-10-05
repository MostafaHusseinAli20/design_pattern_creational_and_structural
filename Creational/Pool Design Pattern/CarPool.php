<?php

class CarPool {
    /**
     * @var Car []
     */

    private $allowedCars = [];
    /**
     * @var Car []
     */
    private $busyCars = [];

    public function rentCar(){
        if(count($this->allowedCars) == 0){
            return new Car();
        }else {
            $car = array_pop($this->allowedCars);
        }
        $this->busyCars[spl_object_hash($car)] = $car;
        return $car;
    }

    public function allowedCar(Car $car){
        $carId = spl_object_hash($car);
        if(isset($this->busyCars[$carId])){
            unset($this->busyCars[$carId]);
            $this->allowedCars[$carId] = $car;
        }
    }
}