<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

require_once 'PedestrianWay.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';

/* Moving bike -------------------------------------------------------------------->
--------------------------------------------------------------------------------- */
$bike1 = new Bicycle("red", 1);
$bike2 = new Bicycle("bleu", 1);

echo "<h1>Vélo</h1>";
echo $bike1->forward();
echo '<br> Vitesse du vélo rouge : ' . $bike1->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike1->brake();
echo '<br> Vitesse du vélo rouge : ' . $bike1->getCurrentSpeed() . ' km/h' . '<br>';

/* Moving car --------------------------------------------------------------------->
--------------------------------------------------------------------------------- */
$car1 = new Car("black", 5, "fuel");
$car2 = new Car("bleu", 5, "fuel");

// Moving car
echo "<h1>Voiture</h1>";
try{
    echo $car1->start().'<br>';
} catch (Exception $e){
    echo $e->getMessage();
} finally {
    echo "Ma voiture roule comme un donut <br>";
    echo "J'enlève le frein à main <br>";
    $car1->setParkBrake(1).'<br>';
}


echo $car1->forward();
echo '<br> Vitesse de la voiture noir: ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
echo $car1->brake();
echo '<br> Vitesse de la voiture noir : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
echo $car1->brake();


/* Moving Truck --------------------------------------------------------------------->
--------------------------------------------------------------------------------- */
$truck1 = new Truck(100, "pink", 2, "fuel");
$truck2 = new Truck(100, "red", 2, "fuel");

// Moving truck
echo "<h1>Truck</h1>";
echo $truck1->forward();
echo '<br> Vitesse du camion rose: ' . $truck1->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck1->brake();
echo '<br> Vitesse du camion rose : ' . $truck1->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck1->brake()."<br> Le véhicule charge de 50 ...";
$truck1->setChargement(100);
echo "<br> Je vérifie le chargement du camion rose : ";
echo $truck1->checkIfFull();

echo "<br> Je vérifie le chargement du camion rouge : ";
echo $truck2->checkIfFull();




/* QUETE 3 */
$motorWay = new MotorWay();
$motorWay->addVehicle($truck2);
$motorWay->addVehicle($car1);
$motorWay->addVehicle($bike1);
var_dump($motorWay->getCurrentVehicles());

$residentialWay = new ResidentialWay();
$residentialWay->addVehicle($truck2);
var_dump($residentialWay->getCurrentVehicles());


$pedestrianWay = new PedestrianWay();
$pedestrianWay->addVehicle($bike1);
var_dump($pedestrianWay->getCurrentVehicles());


