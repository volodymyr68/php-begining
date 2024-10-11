<?php

namespace Palmo\Core\fifthHw;

interface PaymentMethod
{
    public function processPayment(float $amount): string;
}