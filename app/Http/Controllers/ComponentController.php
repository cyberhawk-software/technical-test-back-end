<?php

namespace App\Http\Controllers;

use App\Http\Resources\ComponentResource;

class ComponentController extends BaseController
{
    public function __construct(protected \App\Services\Component $componentService)
    {
        parent::__construct(service: $this->componentService, resource: ComponentResource::class);
    }
}
