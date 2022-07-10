<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBuildingRequest;
use App\Http\Requests\UpdateBuildingRequest;
use App\Http\Responses\ApiResponse;
use App\Models\Building;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ApiResponse(Building::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBuildingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBuildingRequest $request)
    {
        $building = Building::create($request->validated());

        return new ApiResponse($building);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function show(Building $building)
    {
        return new ApiResponse($building);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBuildingRequest  $request
     * @param  \App\Models\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBuildingRequest $request, Building $building)
    {
        $building->update($request->validated());

        return new ApiResponse($building);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $building)
    {
        $building->delete();

        return new ApiResponse();
    }
}
