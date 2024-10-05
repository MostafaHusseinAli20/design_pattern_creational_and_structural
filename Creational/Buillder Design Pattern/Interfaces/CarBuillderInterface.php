<?php

interface CarBuillderInterface {
    public function createCar();
    public function addEngine();
    public function addBody();
    public function addWheel();
    public function addDoors();
    public function getCar(): Car;
}