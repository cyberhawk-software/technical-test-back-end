<?php

namespace App\Services;

use App\Http\Resources\TurbineResource;
use App\Repositories\Turbine;

class Farm extends Base
{
    public function __construct(\App\Repositories\Farm $farmRepository, private Turbine $turbineRepository)
    {
        parent::__construct($farmRepository);
    }

    /**
     * Get turbine
     *
     * @param int $farmID
     * @param int $turbineID
     * @return TurbineResource
     */
    public function getTurbine(int $farmID, int $turbineID): TurbineResource
    {
        $turbine = $this->turbineRepository->all(filters: [
            'id' => $turbineID,
            'farm_id' => $farmID
        ]);

        return new TurbineResource($turbine);
    }
}