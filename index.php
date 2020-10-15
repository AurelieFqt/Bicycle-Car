<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Truck.php';

$bike = new Bicycle('pink', 2);
echo $bike->forward();
var_dump($bike);

var_dump(Car::ALLOWED_ENERGIES);


// Moving bike
echo $bike->forward();
echo '<br>Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Car
$car = new Car("yellow", 2, "electric");
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

//Truck
$truck = new Truck("red", 2, "fuel",20);
var_dump($truck);

echo 'Capacité de stockage : ' . $truck->getStorageCapacity() . "<br>";
echo 'Niveau de chargement : ' . $truck->cargoLevel() . "<br>";
echo $truck->forward() . "<br>";
echo $truck->brake() . "<br>";

$truck->setCargo(20);
echo 'Capacité de stockage : ' . $truck->getStorageCapacity() . "<br>";
echo 'Niveau de chargement : ' . $truck->cargoLevel() . "<br>";
