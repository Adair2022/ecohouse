<?php

namespace App\Http\Controllers;

use App\Models\surcos;
use Illuminate\Http\Request;

class SurcosController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surcos = surcos::all();
        return view("surcos.index")
        ->with(['surcos' => $surcos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $surcos = surcos::all();
        return view('surcos.create' ,compact('surcos'));
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
        $surcos=$request->all();

        surcos::create($surcos);
        return redirect()->route('surcos.index')->with('agregar','Ok');


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
        $surcos = surcos::find($id);
        return view('surcos.show', compact('surcos'));

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
        $surcos = surcos::all();

        $surcos = surcos::findOrFail($id);


        return view('surcos.edit', compact('surcos'));
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
        $surco = surcos::findOrFail($id);

        $surcos = $request->all();
        $surco->update($surcos);

        return redirect()->route('surcos.index')->with('editar', 'Ok');
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
        $surco = surcos::find($id);

        if ($surco) {
            $surco->delete();
            return redirect()->route('surcos.index')->with('eliminar','Ok');
        } else {
            return redirect()->route('surcos.index');
        }
        }
}
