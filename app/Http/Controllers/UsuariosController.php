<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=Usuario::all();

        return view('Usuarios.index'  ,compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("usuarios.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios=$request->all();
        if($imagen=$request->file('imagen')){
            $rutaGuardarImagen='imagen/';
            $imagenUsuario= time().".".$imagen->extension();
            $imagen->move($rutaGuardarImagen,$imagenUsuario);
            $usuarios['img']="$imagenUsuario";
        }
        Usuario::create($usuarios);
        return redirect()->route('usuarios.index')->with('agregar','Ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);

        return view('Usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarios = Usuario::all();

        $usuarios = Usuario::findOrFail($id);


        return view('usuarios.edit', compact('usuarios'));
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
        $usuario = Usuario::findOrFail($id);

    $datos_usuario = $request->all();

    if ($imagen=$request->file('imagen')) {
        $rutaGuardarImagen='imagen/';
            $imagenUsuario= time().".".$imagen->extension();
            $imagen->move($rutaGuardarImagen,$imagenUsuario);
            $datos_usuario['imagen']="$imagenUsuario";
    }

    $usuario->update($datos_usuario);

    return redirect()->route('usuarios.index')->with('editar', 'Ok');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $usuario = Usuario::find($id);

    if ($usuario) {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('eliminar','Ok');
    } else {
        return redirect()->route('usuarios.index');
    }
    }
}
