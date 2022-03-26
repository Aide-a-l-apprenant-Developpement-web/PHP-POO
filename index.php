<?php
require_once 'Bicycle.php';
require_once 'Car.php';

$car = new Car("fuel");
$bicycle = new Bicycle("rouge", 1, 2);
?>

<h1>Voiture</h1>
<h2>Energie du véhicule : <?php echo $car->getEnergy("fuel"); ?></h2>

<p><?php echo $car->start(); ?></p>
<p><?php echo $car->forward(); ?></p>
<p><?php echo $car->brake(); ?></p>
<p><?php echo $car->forward(); ?></p>
<p><?php echo $car->forward(); ?></p>
<p><?php echo $car->forward(); ?></p>
<p><?php echo $car->brake(); ?></p>
<p><?php echo $car->start(); ?></p>
<p><?php echo $car->start(); ?></p>

<?php
echo "-------------------------------";
?>
<h1>Vélo</h1>

<p><?php echo $bicycle->start(); ?></p>
<p><?php echo $bicycle->forward(); ?></p>
<p><?php echo $bicycle->brake(); ?></p>
