<?php

interface ActionsInterface {
    public function add(ProductsInterface $product);
    public function remove(ProductsInterface $product);
}