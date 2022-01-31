<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleFeaturesRequest;
use App\Http\Requests\UpdateVehicleFeaturesRequest;
use App\Models\VehicleFeatures;

class VehicleFeaturesController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVehicleFeaturesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehicleFeaturesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleFeatures  $vehicleFeatures
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleFeatures $vehicleFeatures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVehicleFeaturesRequest  $request
     * @param  \App\Models\VehicleFeatures  $vehicleFeatures
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVehicleFeaturesRequest $request, VehicleFeatures $vehicleFeatures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleFeatures  $vehicleFeatures
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleFeatures $vehicleFeatures)
    {
        //
    }
}
