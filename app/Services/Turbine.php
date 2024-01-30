<?php

namespace App\Services;

use App\Http\Resources\ComponentResource;
use App\Http\Resources\InspectionResource;

class Turbine extends Base
{
    public function __construct(
        \App\Repositories\Turbine $turbine, 
        private \App\Repositories\Component $componentRepository,
        private \App\Repositories\Inspection $inspectionRepository
    )
    {
        parent::__construct($turbine);
    }

    /**
     * Get component
     *
     * @param int $turbineID
     * @param int $componentID
     * @return ComponentResource
     */
    public function getComponent(int $turbineID, int $componentID): ComponentResource
    {
        $component = $this->componentRepository->all(filters: [
            'id' => $componentID,
            'turbine_id' => $turbineID
        ]);

        return new ComponentResource($component);
    }

    /**
     * Get inspection
     *
     * @param int $turbineID
     * @param int $inspectionID
     * @return InspectionResource
     */
    public function getInspection(int $turbineID, int $inspectionID): InspectionResource
    {
        $inspection = $this->inspectionRepository->all(filters: [
            'id' => $inspectionID,
            'turbine_id' => $turbineID
        ]);

        return new InspectionResource($inspection);
    }
}