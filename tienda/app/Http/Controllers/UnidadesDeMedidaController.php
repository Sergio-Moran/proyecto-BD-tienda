<?php

namespace App\Http\Controllers;

use App\Models\unidades_de_medida;
use App\Models\unidades_de_medidas;
use Illuminate\Http\Request;

class UnidadesDeMedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Medidas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Medidas.crear');
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
        $datos = $request->except('_token');
        unidades_de_medidas::insert($datos);
        return view('Medidas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\unidades_de_medida  $unidades_de_medida
     * @return \Illuminate\Http\Response
     */
    public function show(unidades_de_medida $unidades_de_medida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\unidades_de_medida  $unidades_de_medida
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $datos = unidades_de_medidas::findOrFail($id);
        return view('Medidas.editar', compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\unidades_de_medida  $unidades_de_medida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datos = $request->except(['_token', '_method']);
        unidades_de_medidas::where('id', '=', $id)
            ->update($datos);
        return redirect('/Medida')->with('message', 'Información Actualizada Correctamente ✔️');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\unidades_de_medida  $unidades_de_medida
     * @return \Illuminate\Http\Response
     */
    public function destroy(unidades_de_medida $unidades_de_medida)
    {
        //
    }
}
