<?php

class Car {
    protected $data = [];


    public function setPart($name, $value){
        $this->data[$name] = $value;
    }
}