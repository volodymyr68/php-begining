<?php

namespace Palmo\Core\fifthHw;

abstract class Vehicle
{
    protected string $brand;
    protected string $model;
    protected int $year;

    function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    abstract public function calculateRentalCost(int $days): float;

    public function getInfo(): string
    {
        return "Brand: " . $this->brand . ", Model: " . $this->model. ", Year: " . $this->year;
    }

}