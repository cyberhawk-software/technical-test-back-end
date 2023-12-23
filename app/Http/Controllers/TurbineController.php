<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTurbineRequest;
use App\Http\Requests\UpdateTurbineRequest;
use App\Http\Resources\TurbineResource;
use App\Models\Turbine;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class TurbineController extends Controller
{

    public function __construct(protected \App\Services\Turbine $turbineService)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return TurbineResource::collection($this->turbineService->all());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTurbineRequest  $request
     * @return Response
     */
    public function store(StoreTurbineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Turbine  $turbine
     * @return Response
     */
    public function show(Turbine $turbine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Turbine  $turbine
     * @return Response
     */
    public function edit(Turbine $turbine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTurbineRequest  $request
     * @param  \App\Models\Turbine  $turbine
     * @return Response
     */
    public function update(UpdateTurbineRequest $request, Turbine $turbine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Turbine  $turbine
     * @return Response
     */
    public function destroy(Turbine $turbine)
    {
        //
    }
}
