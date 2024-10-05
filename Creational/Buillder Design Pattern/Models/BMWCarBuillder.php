<?php

class BMWCarBuillder implements CarBuillderInterface{
    /**
    * @var Car $type
    */
    private $type;

    public function createCar(){
        $this->type = new BMWCarClass();
    }

    public function addEngine(){
        $this->type->setPart('bmwengine', '5stackEngine');
    }

    public function addBody(){
        $this->type->setPart('bmwBody', '50AltraBody');
    }

    public function addWheel(){
        $this->type->setPart('bmwWheel', '250Gant');
    }

    public function addDoors(){
        $this->type->setPart('bmwDoors', 'red');
    }

    public function getCar(): Car
    {
        return $this->type;
    }
}

// $builder = new BMWCarBuillder();
// $carProud = new CarProuducer($builder);
// $carProud->getProducing();
// print_r($builder->getCar());