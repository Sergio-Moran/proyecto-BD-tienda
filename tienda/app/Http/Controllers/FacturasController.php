<?php

namespace App\Http\Controllers;

use App\Models\facturas;
use Illuminate\Http\Request;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Facturas.index');
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
     * @param  \App\Models\facturas  $facturas
     * @return \Illuminate\Http\Response
     */
    public function show(facturas $facturas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\facturas  $facturas
     * @return \Illuminate\Http\Response
     */
    public function edit(facturas $facturas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\facturas  $facturas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, facturas $facturas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\facturas  $facturas
     * @return \Illuminate\Http\Response
     */
    public function destroy(facturas $facturas)
    {
        //
    }
}
