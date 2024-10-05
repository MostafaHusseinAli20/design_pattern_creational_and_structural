<?php

class SuagerDecoratoCoffe implements CoffeInterface
{
    private $coffe;

    public function __construct(CoffeInterface $coffe)
    {
        $this->coffe = $coffe;
    }

    public function cost()
    {
        return $this->coffe->cost() + 1;
    }
}