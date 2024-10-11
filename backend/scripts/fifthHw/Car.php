<?php

namespace Palmo\Core\fifthHw;

class Car extends Vehicle
{
    private float $dailyRate;

    public function __construct($brand, $model, $year, $dailyRate)
    {
        parent::__construct($brand, $model, $year);
        $this->dailyRate = $dailyRate;
    }

    public function calculateRentalCost(int $days): float
    {
        return $days * $this->dailyRate;
    }
}