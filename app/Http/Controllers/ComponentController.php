<?php

namespace App\Http\Controllers;

use App\Http\Resources\ComponentResource;
use App\Http\Resources\GradeResource;
use App\Models\Component;
use App\Models\Grade;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ComponentController extends BaseController
{
    public function __construct(protected \App\Services\Component $componentService)
    {
        parent::__construct(service: $this->componentService, resource: ComponentResource::class);
    }

    /**
     * Show the component resource
     *
     * @param Component $component
     * @return ComponentResource
     */
    public function show(Component $component): ComponentResource
    {
        return new ComponentResource($component);
    }

    /**
     * Get component grades
     *
     * @param Component $component
     * @return AnonymousResourceCollection
     */
    public function getGrades(Component $component): AnonymousResourceCollection
    {
        return ComponentResource::collection($component->grades);
    }

    /**
     * Get component grade
     *
     * @param Component $component
     * @param Grade $grade
     * @return GradeResource
     */
    public function getGrade(Component $component, Grade $grade): GradeResource
    {
        return $this->componentService->getGrade(componentID: $component->id, gradeID: $grade->id);
    }
}
