<?php

namespace App\Services;

use App\Repositories\GradeType as GradeTypeRepository;

class GradeType extends Base
{
    public function __construct(GradeTypeRepository $repository)
    {
        parent::__construct($repository);
    }
}