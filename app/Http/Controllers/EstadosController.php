<?php

namespace App\Http\Controllers;

use App\Models\estados;
use App\Http\Requests\StoreestadosRequest;
use App\Http\Requests\UpdateestadosRequest;
use App\Models\Municipios;
use App\Models\municipiosdos;
use Illuminate\Http\Request;


class EstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("usuarios.create");

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
    public function index()
    {
        //
        $estados = Estados::all();

        return view("estados/index")
            ->with(['estados' => $estados]);
    }
    public function js_municipios(Request $request){
        $id_estado = $request->get('id_estado');
        $municipios = Municipios::where('id_estado',$id_estado)->get();

        return view("js_municipios")
        ->with(['municipios' => $municipios]);
    }
    //---------------------------  Combos dinamicos: Estados  ------------------------
       public function registro(){
        $estados = Estados::all();

        return view("estados/index")
            ->with(['estados' => $estados]);
    }
}
