<?php

use Palmo\Core\fifthHw\Car;
use Palmo\Core\fifthHw\Motorcycle;
use Palmo\Core\fifthHw\RentalSystem;


$rentalSystem = new RentalSystem();

$BMW = new Car("BMW", "M5", "2024", 3000);
$AUDI = new Car("AUDI", "A6", "2024", 2000);
$JAVA = new Motorcycle("JAVA", "777", "1999", 100);

$rentalSystem->addVehicle($BMW);
$rentalSystem->addVehicle($AUDI);
$rentalSystem->addVehicle($JAVA);

try {
    $result = $rentalSystem->rentVehicle($BMW, 5, "11111111111", "17-04-2025");
    echo $result;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage;
}
try {
    $result = $rentalSystem->rentVehicle($JAVA, 5, "11111111111", "dsfds");
    echo $result;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage;
}

try {
    $result = $rentalSystem->rentVehicle($AUDI, 1, "11111111111", "17-04-2025");
    echo $result;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage;
}