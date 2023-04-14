<?php

namespace App\Http\Controllers;

use App\Models\TipoUsuario;
use App\Models\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = TipoUsuario::Select('tipo_usuario.id as id_t','usuario.nombre','tipo_usuario.nombre_t')
        ->join('usuario','usuario.id','=','tipo_usuario.usuario_id')->get();
        return view("Tipo.index",compact("tipos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = Usuario::all('id','nombre');
        return view('Tipo.create' ,compact('usuarios'));
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
        $t_usuario=$request->all();

        TipoUsuario::create($t_usuario);
        return redirect()->route('t_usuario.index')->with('agregar','Ok');

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
        $t_usuario = TipoUsuario::Select('tipo_usuario.id as id_t','usuario.nombre as usuario','tipo_usuario.nombre_t')
        ->join('usuario','usuario.id','=','tipo_usuario.usuario_id')
        ->where('tipo_usuario.id',$id)
        ->get();

        // $t_usuario = TipoUsuario::find($id);
        return view('Tipo.show', compact('t_usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Tipo = TipoUsuario::all();
        $usuarios = Usuario::all('id','nombre');

        $Tipo = TipoUsuario::findOrFail($id);
        $tipos = TipoUsuario::Select('tipo_usuario.id as id_t','usuario.nombre','tipo_usuario.nombre_t')
        ->join('usuario','usuario.id','=','tipo_usuario.usuario_id')->get();

        return view('Tipo.edit', compact('Tipo', 'tipos', 'usuarios'));
        //
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
        $Tipo = TipoUsuario::findOrFail($id);

        $Tipos = $request->all();
        $Tipo->update($Tipos);

        return redirect()->route('t_usuario.index')->with('editar', 'Ok');

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
        $usuario = TipoUsuario::find($id);

        if ($usuario) {
            $usuario->delete();
            return redirect()->route('t_usuario.index')->with('eliminar','Ok');
        } else {
            return redirect()->route('t_usuario.index');
        }
    }
}
