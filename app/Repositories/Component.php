<?php

namespace App\Repositories;

use App\Models\Component as ComponentModel;

class Component extends Base
{
    public function __construct(ComponentModel $model)
    {
        parent::__construct($model);
    }
}