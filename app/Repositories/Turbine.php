<?php

namespace App\Repositories;

use App\Models\Turbine as TurbineModel;

class Turbine extends Base
{

    public function __construct(TurbineModel $model)
    {
        parent::__construct($model);
    }
}