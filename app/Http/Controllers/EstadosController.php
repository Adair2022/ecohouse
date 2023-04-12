<?php

namespace App\Http\Controllers;

use App\Models\estados;
use App\Http\Requests\StoreestadosRequest;
use App\Http\Requests\UpdateestadosRequest;

class EstadosController extends Controller
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
     * @param  \App\Http\Requests\StoreestadosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreestadosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function show(estados $estados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function edit(estados $estados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateestadosRequest  $request
     * @param  \App\Models\estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateestadosRequest $request, estados $estados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function destroy(estados $estados)
    {
        //
    }
}
