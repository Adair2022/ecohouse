<?php

namespace App\Http\Controllers;

use App\Models\plantas;
use App\Http\Requests\StoreplantasRequest;
use App\Http\Requests\UpdateplantasRequest;

class PlantasController extends Controller
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
     * @param  \App\Http\Requests\StoreplantasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreplantasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\plantas  $plantas
     * @return \Illuminate\Http\Response
     */
    public function show(plantas $plantas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\plantas  $plantas
     * @return \Illuminate\Http\Response
     */
    public function edit(plantas $plantas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateplantasRequest  $request
     * @param  \App\Models\plantas  $plantas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateplantasRequest $request, plantas $plantas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\plantas  $plantas
     * @return \Illuminate\Http\Response
     */
    public function destroy(plantas $plantas)
    {
        //
    }
}
