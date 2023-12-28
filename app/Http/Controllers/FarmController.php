<?php

namespace App\Http\Controllers;

use App\Http\Resources\FarmResource;
use App\Http\Resources\TurbineResource;
use App\Models\Farm;
use App\Models\Turbine;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class FarmController extends BaseController
{
    public function __construct(private \App\Services\Farm $farmService)
    {
        parent::__construct(service: $this->farmService, resource: FarmResource::class);
    }

    /**
     * @param Farm $farm
     * @return FarmResource
     */
    public function show(Farm $farm): FarmResource
    {
        return new FarmResource($farm);
    }

    /**
     * Get farm turbines
     *
     * @param Farm $farm
     * @return AnonymousResourceCollection
     */
    public function getTurbines(Farm $farm): AnonymousResourceCollection
    {
        return TurbineResource::collection($farm->turbines);
    }

    /**
     * Get farm turbine
     *
     * @param Farm $farm
     * @param Turbine $turbine
     * @return TurbineResource
     */
    public function getTurbine(Farm $farm, Turbine $turbine): TurbineResource
    {
        return $this->farmService->getTurbine(farmID: $farm->id, turbineID: $turbine->id);
    }
}
