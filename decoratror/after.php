<?php

interface CarService
{

    public function getCost();

    public function getDescription();
}

/**
 * Class BasicService
 * Concrete Component
 */
class BasicService implements CarService
{

    public function getCost() {

        return 25;
    }

    public function getDescription() {

        return 'Basic Inspection';
    }
}

/**
 * Class AdditionalService
 * Abstract decorator
 */
abstract class AdditionalService implements CarService
{

    protected $carService;

    public function __construct(CarService $carService) {

        $this->carService = $carService;
    }
}

/**
 * Class OilChange
 * Decorator
 */
class OilChange extends AdditionalService
{

    public function getCost() {

        return 19 + $this->carService->getCost();
    }

    public function getDescription() {

        return $this->carService->getDescription() . ', and oil change';
    }
}

/**
 * Class TireRotation
 * Decorator
 */
class TireRotation extends AdditionalService
{

    public function getCost() {

        return 20 + $this->carService->getCost();
    }

    public function getDescription() {

        return $this->carService->getDescription() . ', and tire rotation';
    }
}

$service = new TireRotation(new OilChange(new BasicService()));

echo $service->getDescription();
echo "<br>";
echo $service->getCost();