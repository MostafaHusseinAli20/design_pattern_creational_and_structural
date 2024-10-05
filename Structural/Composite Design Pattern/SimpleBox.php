<?php

class SimpleBox implements ProductsInterface
{
    private $price;
    public function __construct(int $price)
    {
        $this->price = $price;
    }
    public function getPrice() 
    {
        return $this->price;
    }
}
