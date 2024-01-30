<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComponentTypeRequest;
use App\Http\Requests\UpdateComponentTypeRequest;
use App\Http\Resources\ComponentTypeResource;
use App\Http\Resources\FarmResource;
use App\Models\ComponentType;

class ComponentTypeController extends BaseController
{
    public function __construct(private \App\Services\ComponentType $componentTypeService)
    {
        parent::__construct(service: $this->componentTypeService, resource: ComponentTypeResource::class);
    }

    /**
     * Show componentType resource
     *
     * @param ComponentType $componentType
     * @return ComponentTypeResource
     */
    public function show(ComponentType $componentType): ComponentTypeResource
    {
        return new ComponentTypeResource($componentType);
    }
}
