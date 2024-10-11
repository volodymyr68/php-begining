<?php

namespace Palmo\Core\fifthHw;

class Motorcycle extends Vehicle
{
    private float $hourlyRate;

    public function __construct($brand, $model, $year, $hourlyRate){
        parent::__construct($brand, $model, $year);
        $this->hourlyRate = $hourlyRate;
    }

    public function calculateRentalCost(int $days): float
    {
        return $this->hourlyRate * ($days*24);
    }
}