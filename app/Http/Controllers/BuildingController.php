<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBuildingRequest;
use App\Http\Responses\ApiResponse;
use App\Models\Building;
use Illuminate\Http\Request;

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
     * @param  \App\Models\Building  $buidling
     * @return \Illuminate\Http\Response
     */
    public function show(Building $buidling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Building  $buidling
     * @return \Illuminate\Http\Response
     */
    public function edit(Building $buidling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Building  $buidling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Building $buidling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Building  $buidling
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $buidling)
    {
        //
    }
}
