<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\greenhouse;
use Illuminate\Http\Request;
use App\Models\Ubicacion;
use App\Models\Usuario;
class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $green = greenhouse::all();
        return view("Ubicacion.index")
        ->with(['green' => $green]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = Usuario::all('id','nombre');
        return view('ubicacion.create' ,compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $green=$request->all();

        greenhouse::create($green);
        return redirect()->route('ubicacion.index')->with('agregar','Ok');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $green = greenhouse::find($id);
        return view('Ubicacion.show', compact('green'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ubicacion = greenhouse::all();

        $ubicacion = greenhouse::findOrFail($id);


        return view('ubicacion.edit', compact('ubicacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $ubicacion = greenhouse::findOrFail($id);

        $green = $request->all();
        $ubicacion->update($green);

        return redirect()->route('ubicacion.index')->with('editar', 'Ok');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuario = greenhouse::find($id);

        if ($usuario) {
            $usuario->delete();
            return redirect()->route('ubicacion.index')->with('eliminar','Ok');
        } else {
            return redirect()->route('ubicacion.index');
        }
        }
    }

