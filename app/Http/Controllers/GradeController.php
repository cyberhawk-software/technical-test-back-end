<?php

namespace App\Http\Controllers;

use App\Http\Resources\GradeResource;
use App\Models\Grade;

class GradeController extends BaseController
{
    public function __construct(private \App\Services\Grade $gradeService)
    {
        parent::__construct(service: $this->gradeService, resource: GradeResource::class);
    }

    /**
     * Show grade resource
     *
     * @param Grade $grade
     * @return GradeResource
     */
    public function show(Grade $grade): GradeResource
    {
        return new GradeResource($grade);
    }
}
