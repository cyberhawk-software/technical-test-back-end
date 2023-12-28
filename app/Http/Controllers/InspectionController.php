<?php

namespace App\Http\Controllers;

use App\Http\Resources\InspectionResource;

class InspectionController extends BaseController
{
    public function __construct(private \App\Services\Inspection $inspectionService)
    {
        parent::__construct(service: $this->inspectionService, resource: InspectionResource::class);
    }
}
