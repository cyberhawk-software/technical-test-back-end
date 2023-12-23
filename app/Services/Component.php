<?php

namespace App\Services;

use App\Repositories\Component as ComponentRepository;

class Component extends Base
{
    public function __construct(ComponentRepository $repository)
    {
        parent::__construct($repository);
    }
}