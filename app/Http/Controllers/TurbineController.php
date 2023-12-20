<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTurbineRequest;
use App\Http\Requests\UpdateTurbineRequest;
use App\Models\Turbine;

class TurbineController extends Controller
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
     * @param  \App\Http\Requests\StoreTurbineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTurbineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Turbine  $turbine
     * @return \Illuminate\Http\Response
     */
    public function show(Turbine $turbine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Turbine  $turbine
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTurbineRequest $request, Turbine $turbine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Turbine  $turbine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turbine $turbine)
    {
        //
    }
}
