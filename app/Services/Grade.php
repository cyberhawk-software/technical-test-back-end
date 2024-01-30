<?php

namespace App\Services;

use App\Repositories\Grade as GradeRepository;

class Grade extends Base
{
    public function __construct(GradeRepository $repository)
    {
        parent::__construct($repository);
    }
}