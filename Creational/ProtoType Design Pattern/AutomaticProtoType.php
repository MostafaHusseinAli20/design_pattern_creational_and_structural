<?php

class AutomaticProtoType implements CarProtoTypeInterface{
    public $model = 'Automatic';
    public function clone(){
        return clone $this;
    }
}
$prototype_auto = new AutomaticProtoType();
$prototype_auto->clone();
echo $prototype_auto->model . "<br>";