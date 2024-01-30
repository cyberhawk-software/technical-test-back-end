<?php

namespace App\Http\Controllers;

use App\Http\Resources\GradeResource;
use App\Http\Resources\InspectionResource;
use App\Models\Grade;
use App\Models\Inspection;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class InspectionController extends BaseController
{
    public function __construct(private \App\Services\Inspection $inspectionService)
    {
        parent::__construct(service: $this->inspectionService, resource: InspectionResource::class);
    }

    /**
     * Show the inspection resource
     *
     * @param Inspection $inspection
     * @return InspectionResource
     */
    public function show(Inspection $inspection): InspectionResource
    {
        return new InspectionResource($inspection);
    }

    /**
     * Get inspection grades
     *
     * @param Inspection $inspection
     * @return AnonymousResourceCollection
     */
    public function getGrades(Inspection $inspection): AnonymousResourceCollection
    {
        return GradeResource::collection($inspection->grades);
    }

    /**
     * Get inspection grade
     *
     * @param Inspection $inspection
     * @param Grade $grade
     * @return GradeResource
     */
    public function getGrade(Inspection $inspection, Grade $grade): GradeResource
    {
        return $this->inspectionService->getGrade(inspectionID: $inspection->id, gradeID: $grade->id);
    }
}
