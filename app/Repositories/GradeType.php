<?php

namespace App\Repositories;

use App\Models\GradeType as GradeTypeModel;

class GradeType extends Base
{
    public function __construct(GradeTypeModel $model)
    {
        parent::__construct($model);
    }
}