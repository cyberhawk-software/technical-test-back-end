<?php

namespace App\Repositories;

use App\Models\ComponentType as ComponentTypeModel;

class ComponentType extends Base
{

    public function __construct(ComponentTypeModel $model)
    {
        parent::__construct($model);
    }
}