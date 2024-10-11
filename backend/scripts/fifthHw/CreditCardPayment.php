<?php

namespace Palmo\Core\fifthHw;

use Exception;

class CreditCardPayment implements PaymentMethod
{
    private string $cardNumber;
    private string $expirationDate;

    public function __construct(string $cardNumber, string $expirationDate)
    {
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
    }

    public function processPayment(float $amount): string
    {
        if ($this->cardNumber == null) {
            throw new Exception("Card number is invalid.");
        }
        if ($this->expirationDate == null) {
            throw new Exception("Expiration date is invalid.");
        }
        if (strtotime($this->expirationDate) < time()) {
            throw new Exception("Card has expired.");
        }
        return "Payment on " . $amount . " successful";
    }
}