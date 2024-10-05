<?php

class StaticFactory {
    public static function factory(string $type){
        if($type === 'BMW'){
            return new BMWCars();
        }
        if($type === 'Benz'){
            return new BenzCars();
        }
        return null;
    }
}
// $stfactory = new StaticFactory();
// $s_bmw = $stfactory->factory('BMW');
// echo $s_bmw->model() . "<br>";

// $s_benz = $stfactory->factory('Benz');
// echo $s_benz->model();