<?php
include 'app/autoload.php';


$car = new Car(350, 200);

for ($i = 0; $i < 10; $i++) {
    $car->drive();
    echo 'SPEED = '.$car->getSpeed().PHP_EOL;
    echo 'GEAR = '.$car->getAvTransmission().PHP_EOL;
    echo 'ENGINE START = '.$car->getEngineCar().PHP_EOL;
}
for ($i = 0; $i < 10; $i++) {
    $car->braking();
    echo 'SPEED = '.$car->getSpeed().PHP_EOL;
    echo 'GEAR = '.$car->getAvTransmission().PHP_EOL;
    echo 'ENGINE START = '.$car->getEngineCar().PHP_EOL;
}




