<?php

// Create a simple coffee
$simple_Coffe = new SimpleCoffe();
$milk_Decorator = new MilkDecoratorCoffe($simple_Coffe);
$suager_Decorator = new SuagerDecoratoCoffe($milk_Decorator);
echo "Coffe Cost is :" . $suager_Decorator->cost();
