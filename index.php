<?php

require_once 'Bicycle.php';
require_once 'Car.php';

/* Moving bike -------------------------------------------------------------------->
--------------------------------------------------------------------------------- */
$bike1 = new Bicycle("red");
$bike2 = new Bicycle("bleu");

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
echo $car1->forward();
echo '<br> Vitesse du vélo noir: ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
echo $car1->brake();
echo '<br> Vitesse du vélo noir : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
echo $car1->brake();


