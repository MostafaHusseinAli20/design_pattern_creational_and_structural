<?php

class CarProuducer
{
    /**
     * @var CarBuilderInterface
     */
    public $builder;

    public function __construct(CarBuillderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function getProducing()
    {
        $this->builder->createCar();    
        $this->builder->addEngine();
        $this->builder->addBody();
        $this->builder->addWheel();
        $this->builder->addDoors();
        return $this->builder->getCar();
    }
}
