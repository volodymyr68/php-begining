<?php

namespace Palmo\Core\fifthHw;

abstract class Vehicle
{
    private string $brand;
    private string $model;
    private int $year;

    function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    abstract public function calculateRentalCost(int $days):float;

    public function getInfo(): void
    {
        echo "Brand: " . $this->brand . "\n";
        echo "Model: " . $this->model . "\n";
        echo "Year: " . $this->year . "\n";
    }

}