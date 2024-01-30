<?php

namespace App\Http\Controllers;

use App\Http\Resources\GradeTypeResource;
use App\Models\GradeType;

class GradeTypeController extends BaseController
{
    public function __construct(private \App\Services\GradeType $gradeTypeService)
    {
        parent::__construct(service: $this->gradeTypeService, resource: GradeTypeResource::class);
    }

    /**
     * Show the GradeType resource
     *
     * @param GradeType $gradeType
     * @return GradeTypeResource
     */
    public function show(GradeType $gradeType): GradeTypeResource
    {
        return new GradeTypeResource($gradeType);
    }
}
