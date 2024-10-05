<?php

class ManualProtoType implements CarProtoTypeInterface {
    public $model = 'Manual';
    public function clone(){
        return clone $this;
    }
}
// $prototype_manual = new ManualProtoType();
// $prototype_manual->clone();
// echo $prototype_manual->model;