<?php

namespace App\Repositories;

use App\Models\Inspection as InspectionModel;

class Inspection extends Base
{
    public function __construct(InspectionModel $model)
    {
        parent::__construct($model);
    }
}