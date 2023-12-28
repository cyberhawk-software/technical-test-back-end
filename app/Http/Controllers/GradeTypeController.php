<?php

namespace App\Http\Controllers;

use App\Http\Resources\GradeTypeResource;

class GradeTypeController extends BaseController
{
    public function __construct(private \App\Services\GradeType $gradeTypeService)
    {
        parent::__construct(service: $this->gradeTypeService, resource: GradeTypeResource::class);
    }
}
