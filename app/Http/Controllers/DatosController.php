<?php

namespace App\Http\Controllers;

use App\Models\Datos;
use Illuminate\Http\Request;

class DatosController extends Controller
{
    //
    public function index()
    {
        $datos = Datos::all();
        return view("welcome")
        ->with(['datos' => $datos]);
    }

}
