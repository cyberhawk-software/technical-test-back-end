<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComponentTypeRequest;
use App\Http\Requests\UpdateComponentTypeRequest;
use App\Models\ComponentType;

class ComponentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreComponentTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComponentTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComponentType  $componentType
     * @return \Illuminate\Http\Response
     */
    public function show(ComponentType $componentType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComponentType  $componentType
     * @return \Illuminate\Http\Response
     */
    public function edit(ComponentType $componentType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComponentTypeRequest  $request
     * @param  \App\Models\ComponentType  $componentType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComponentTypeRequest $request, ComponentType $componentType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComponentType  $componentType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComponentType $componentType)
    {
        //
    }
}
