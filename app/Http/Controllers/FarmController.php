<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFarmRequest;
use App\Http\Requests\UpdateFarmRequest;
use App\Http\Resources\FarmResource;
use App\Http\Resources\TurbineResource;
use App\Models\Farm;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class FarmController extends Controller
{
    public function __construct(protected \App\Services\Farm $farmService)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */

    public function index(): AnonymousResourceCollection
    {
        return FarmResource::collection($this->farmService->all());
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreFarmRequest $request
     * @return Response
     */
    public function store(StoreFarmRequest $request)
    {
        // TODO store farm logic here
    }

    /**
     * Display the specified resource.
     *
     * @param Farm $farm
     * @return FarmResource
     */
    public function show(Farm $farm): FarmResource
    {
        return new FarmResource($farm);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Farm $farm
     * @return Response
     */
    public function edit(Farm $farm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFarmRequest  $request
     * @param Farm $farm
     * @return Response
     */
    public function update(UpdateFarmRequest $request, Farm $farm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Farm $farm
     * @return Response
     */
    public function destroy(Farm $farm)
    {
        //
    }
}
