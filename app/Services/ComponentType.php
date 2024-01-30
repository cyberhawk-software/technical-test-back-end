<?php

namespace App\Services;

use App\Repositories\ComponentType as ComponentTypeRepository;

class ComponentType extends Base
{
    public function __construct(ComponentTypeRepository $repository)
    {
        parent::__construct($repository);
    }
}