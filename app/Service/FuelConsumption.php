<?php

namespace App\Service;

use Illuminate\Database\Eloquent\Model;

class FuelConsumption
{
    private $model;
    private $extra;

    public function __construct($model)
    {
        $this->model = $model;
        $this->extra = 0;
    }
    public function refueling($liter)
    {
        return [
            'Distance' => $liter * 10 + $this->extra,
            'Model' => $this->model,
            'Extra' => $this->extra
        ];
    }

    public function premiumGasoline($extra)
    {
        $this->extra = $extra;
    }
}
