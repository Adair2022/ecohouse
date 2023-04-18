<?php

namespace App\Http\Controllers;

use App\Models\plantas;
use Illuminate\Http\Request;

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
        $green = plantas::all();
        return view("plantas.index")
        ->with(['green' => $green]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('plantas.create');
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

        $usuarios=$request->all();
        if($imagen=$request->file('imagen')){
            $rutaGuardarImagen='imagen/';
            $imagenUsuario= time().".".$imagen->extension();
            $imagen->move($rutaGuardarImagen,$imagenUsuario);
            $usuarios['img']="$imagenUsuario";
        }
        plantas::create($usuarios);
        return redirect()->route('plantas.index')->with('agregar','Ok');
    }

    /**
     * Display the specified resource.

     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $green = plantas::find($id);
        return view('plantas.show', compact('green'));
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
        $plantas = plantas::all();

        $plantas = plantas::findOrFail($id);


        return view('plantas.edit', compact('plantas'));
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
        $usuario = plantas::findOrFail($id);

        $datos_usuario = $request->all();

        if ($imagen=$request->file('img')) {
            $rutaGuardarImagen='imagen/';
                $imagenUsuario= time().".".$imagen->extension();
                $imagen->move($rutaGuardarImagen,$imagenUsuario);
                $datos_usuario['img']="$imagenUsuario";
        }

        $usuario->update($datos_usuario);

        return redirect()->route('plantas.index')->with('editar', 'Ok');
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
        $usuario = plantas::find($id);

        if ($usuario) {
            $usuario->delete();
            return redirect()->route('plantas.index')->with('eliminar','Ok');
        } else {
            return redirect()->route('plantas.index');
        }
        }
    }

