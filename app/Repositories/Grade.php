<?php

namespace App\Repositories;

use App\Models\Grade as GradeModel;

class Grade extends Base
{
    public function __construct(GradeModel $model)
    {
        parent::__construct($model);
    }
}