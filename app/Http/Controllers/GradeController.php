<?php

namespace App\Http\Controllers;

use App\Http\Resources\GradeResource;

class GradeController extends BaseController
{
    public function __construct(private \App\Services\Grade $gradeService)
    {
        parent::__construct(service: $this->gradeService, resource: GradeResource::class);
    }
}
