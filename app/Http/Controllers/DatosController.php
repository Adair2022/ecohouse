<?php

namespace App\Http\Controllers;

use App\Models\Datos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DatosController extends Controller
{
    //
    public function index()
    {

        $users = DB::table('datos')
        ->join('plantas', 'plantas.id', '=', 'datos.id_planta')
        ->select('datos.humedad as humedad', 'datos.created_at as hora', 'plantas.nombre as planta')
        ->get();
// dd($users);

        $datos = Datos::all();

        return view("welcome")
        ->with(['datos' => $users]);
    }

}
