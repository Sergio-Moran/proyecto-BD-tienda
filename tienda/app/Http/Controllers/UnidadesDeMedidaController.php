<?php

namespace App\Http\Controllers;

use App\Models\unidades_de_medida;
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
    public function edit(unidades_de_medida $unidades_de_medida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\unidades_de_medida  $unidades_de_medida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, unidades_de_medida $unidades_de_medida)
    {
        //
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
