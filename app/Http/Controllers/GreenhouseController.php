<?php

namespace App\Http\Controllers;

use App\Models\greenhouse;
use App\Http\Requests\StoregreenhouseRequest;
use App\Http\Requests\UpdategreenhouseRequest;

class GreenhouseController extends Controller
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
     * @param  \App\Http\Requests\StoregreenhouseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoregreenhouseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\greenhouse  $greenhouse
     * @return \Illuminate\Http\Response
     */
    public function show(greenhouse $greenhouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\greenhouse  $greenhouse
     * @return \Illuminate\Http\Response
     */
    public function edit(greenhouse $greenhouse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategreenhouseRequest  $request
     * @param  \App\Models\greenhouse  $greenhouse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategreenhouseRequest $request, greenhouse $greenhouse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\greenhouse  $greenhouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(greenhouse $greenhouse)
    {
        //
    }
}
