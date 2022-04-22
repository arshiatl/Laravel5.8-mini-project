<?php

namespace App\Additions;

use App\Service\FuelConsumption;

class FuelType
{
    private $fuelConsumption;

    public function __construct(FuelConsumption $FuelConsumption)
    {
        $this->fuelConsumption = $FuelConsumption;
    }

    public function premium()
    {
        $this->fuelConsumption->premiumGasoline(45);
    }
}
