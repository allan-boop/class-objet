<?php
require_once 'Bicycle.php';
$bike = new Bicycle('blue');
$bike->setSpeed(0);
var_dump($bike);
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>';

require_once 'Car.php';
$car = new Car('blue',5 , 'Gasoil');
echo $car->start();
echo '<br>';
echo $car->forward();
echo '<br>';
echo $car->brake();