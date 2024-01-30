<?php

namespace App\Repositories;

use App\Models\Farm as FarmModel;

class Farm extends Base
{
    public function __construct(FarmModel $model)
    {
        parent::__construct($model);
    }
}