<?php

namespace App\Http\Controllers;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    public function __construct(private $service, private $resource)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */

    public function index(): AnonymousResourceCollection
    {
        return $this->resource::collection($this->service->all());
    }
}
