<?php
require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle($color="pink");
var_dump($bike);


// Moving bike
echo $bike->forward();
echo '<br>Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Car
$car = new Car($color="yellow", $nbSeats=2, $energy="Bonbons");
var_dump($car);

//Moving Car
echo $car->start();
echo '<br>Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h';
echo '<br>Energie de la voiture : ' . $car->getEnergyLevel() . ' kb' . '<br>';
echo $car->forward();
echo '<br>Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h';
echo '<br>Energie de la voiture : ' . $car->getEnergyLevel() . ' kb' . '<br>';
echo $car->brake();
echo '<br>Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h';
echo '<br>Energie de la voiture : ' . $car->getEnergyLevel() . ' kb' . '<br>';
echo $car->brake();