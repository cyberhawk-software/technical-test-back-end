<?php

namespace App\Services;

use App\Repositories\Inspection as InspectionRepository;

class Inspection extends Base
{
    public function __construct(InspectionRepository $repository)
    {
        parent::__construct($repository);
    }
}