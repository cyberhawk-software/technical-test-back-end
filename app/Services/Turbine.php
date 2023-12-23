<?php

namespace App\Services;

class Turbine extends Base
{
    public function __construct(\App\Repositories\Turbine $turbine)
    {
        parent::__construct($turbine);
    }
}