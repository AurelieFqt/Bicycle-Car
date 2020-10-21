<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

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



//----------------------------------------------- POO3----------------------------------------------//

$motorway = new MotorWay();
$motorway->addVehicle($car);
$motorway->addVehicle($truck);
$motorway->addVehicle($bike);
var_dump($motorway->getCurrentVehicles());

$pedestre = new PedestrianWay();
$pedestre->addVehicle($car);
$pedestre->addVehicle($truck);
$pedestre->addVehicle($bike);
var_dump($pedestre->getCurrentVehicles());

$residential = new ResidentialWay();
$residential->addVehicle($car);
$residential->addVehicle($truck);
$residential->addVehicle($bike);
var_dump($residential->getCurrentVehicles());