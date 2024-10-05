<?php

class CreatorBenz extends BrandFactory {
    public function factoryMethod(): CreateBrandInterface {
        return new MarcedsBenzBrandClass();
    }
}
