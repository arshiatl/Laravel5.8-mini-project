<?php

namespace App\Http\Controllers;

use App\Additions\FuelType;
use App\Service\FuelConsumption;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function calc(FuelConsumption $fuelConsumption, FuelType $fuelType)
    {
        $FuelType = $fuelType->premium();
        dd($fuelConsumption->refueling(20));
    }
}
