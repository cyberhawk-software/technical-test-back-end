<?php

namespace App\Http\Controllers;

use App\Http\Resources\ComponentResource;
use App\Http\Resources\InspectionResource;
use App\Http\Resources\TurbineResource;
use App\Models\Component;
use App\Models\Inspection;
use App\Models\Turbine;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class TurbineController extends BaseController
{
    public function __construct(protected \App\Services\Turbine $turbineService)
    {
        parent::__construct(service: $this->turbineService, resource: TurbineResource::class);
    }

    /**
     * Show the turbine resource
     *
     * @param Turbine $turbine
     * @return TurbineResource
     */
    public function show(Turbine $turbine): TurbineResource
    {
        return new TurbineResource($turbine);
    }

    /**
     * Get turbine components
     *
     * @param Turbine $turbine
     * @return AnonymousResourceCollection
     */
    public function getComponents(Turbine $turbine): AnonymousResourceCollection
    {
        return ComponentResource::collection($turbine->components);
    }

    /**
     * Get turbine component
     *
     * @param Turbine $turbine
     * @param Component $component
     * @return ComponentResource
     */
    public function getComponent(Turbine $turbine, Component $component): ComponentResource
    {
        return $this->turbineService->getComponent(turbineID: $turbine->id, componentID: $component->id);
    }

    /**
     * Get turbine inspections
     *
     * @param Turbine $turbine
     * @return AnonymousResourceCollection
     */
    public function getInspections(Turbine $turbine): AnonymousResourceCollection
    {
        return InspectionResource::collection($turbine->inspections);
    }

    /**
     * Get turbine component
     *
     * @param Turbine $turbine
     * @param Inspection $inspection
     * @return InspectionResource
     */
    public function getInspection(Turbine $turbine, Inspection $inspection): InspectionResource
    {
        return $this->turbineService->getInspection(turbineID: $turbine->id, inspectionID: $inspection->id);
    }
}
