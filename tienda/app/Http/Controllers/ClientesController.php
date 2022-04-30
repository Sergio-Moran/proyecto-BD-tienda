<?php

namespace App\Http\Controllers;

use App\Http\Requests\Usuarios\Guardar;
use App\Models\clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Inicio.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Clientes.crear');
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
        clientes::insert($datos);
        return view('Clientes.indexClientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(clientes $clientes)
    {
        //
        return view('Clientes.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $datos = clientes::findOrFail($id);
        return view('Clientes.editar', compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datos = $request->except(['_token', '_method']);
        clientes::where('id', '=', $id)
            ->update($datos);
        return redirect('/Cliente/lista')->with('message', 'Información Actualizada Correctamente ✔️');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        clientes::where('id', '=', $id)
            ->delete();
        return redirect('/Cliente/lista')->with('message', 'Registro Eliminado ✔️');
    }

    public function reporte()
    {
        return view('Reportes.index');
    }

    public function cliente()
    {
        return view('Clientes.indexClientes');
    }
}
