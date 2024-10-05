<?php

class CreatorBMW extends BrandFactory{
    public function factoryMethod(): CreateBrandInterface {
        return new BMWBrandClass();
    }
}
