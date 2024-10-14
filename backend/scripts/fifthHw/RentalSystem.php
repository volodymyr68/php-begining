<?php

namespace Palmo\Core\fifthHw;

class RentalSystem
{
    private array $vehicles = [];

    public function addVehicle(Vehicle $vehicle): void{
        $this->vehicles[] = $vehicle;
    }

    /**
     * @throws \Exception
     */
    public function rentVehicle(Vehicle $vehicle, int $days, string $cardNumber, string $expirationDate): string
    {
        $rentSum = $vehicle->calculateRentalCost($days);
        $payment = new CreditCardPayment($cardNumber,$expirationDate);
        return $payment->processPayment($rentSum);
    }

}