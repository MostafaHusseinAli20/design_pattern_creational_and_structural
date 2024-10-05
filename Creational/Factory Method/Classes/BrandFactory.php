<?php

abstract class BrandFactory
{
    // Factory method
    public abstract function factoryMethod(): CreateBrandInterface;
    public function someBrand(){
        $brand = $this->factoryMethod();
        return "Creator : " . $brand->createBrand();
    }
}