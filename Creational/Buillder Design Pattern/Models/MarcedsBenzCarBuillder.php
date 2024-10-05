<?php

class MarcedsBenzCarBuillder implements CarBuillderInterface{
    /**
    * @var Car $type
    */
    private $type;

    public function createCar(){
        $this->type = new MarcedsBenzClass();
    }

    public function addEngine(){
        $this->type->setPart('marceds-engine', 'blue');
        
    }

    public function addBody(){
        $this->type->setPart('marceds-body', 'blue');
    }

    public function addWheel(){
        $this->type->setPart('marceds-wheel', 'blue');
        
    }

    public function addDoors(){
        $this->type->setPart('marceds-doors', 'blue');
    }

    public function getCar(): Car
    {
        return $this->type;
    }
}

// $builder = new MarcedsBenzCarBuillder();
// $carProducer = new CarProuducer($builder);
// $carProducer->getProducing();
// print_r($builder->getCar());