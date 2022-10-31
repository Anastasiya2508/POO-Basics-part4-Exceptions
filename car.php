<?php

class Car
{
    private bool $hasParkBrake;

    public function setParkBrake($brake): void
    {
        $this->hasParkBrake = $brake;
    }

    public function start(): void
    {
        if (isset($this->hasParkBrake))
            echo $this->hasParkBrake;
        else throw new Exception('Variable non définie');
    }
}

$car = new Car();
$car->setParkBrake(true);

try {
    $car->start();
} catch (Exception $e) {
    echo 'Exception received  : ' . $e->getMessage() . PHP_EOL;
    $car->setParkBrake(true);
} finally {
    echo "Ma voiture roule comme un donut" . PHP_EOL;
}