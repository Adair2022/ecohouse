<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $green = sensor::all();
        return view("sensor.index")
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
        return view('sensor.create');
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

        sensor::create($green);
        return redirect()->route('sensor.index')->with('agregar','Ok');
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
        $green = sensor::find($id);
        return view('sensor.show', compact('green'));
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
        $sensor = sensor::all();

        $sensor = sensor::findOrFail($id);


        return view('sensor.edit', compact('sensor'));
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
        $sensor = sensor::findOrFail($id);

        $green = $request->all();
        $sensor->update($green);

        return redirect()->route('sensor.index')->with('editar', 'Ok');
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
        $usuario = sensor::find($id);

        if ($usuario) {
            $usuario->delete();
            return redirect()->route('sensor.index')->with('eliminar','Ok');
        } else {
            return redirect()->route('sensor.index');
        }
        }
    }

