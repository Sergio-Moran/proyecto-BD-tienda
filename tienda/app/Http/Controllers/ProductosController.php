<?php

namespace App\Http\Controllers;

use App\Models\productos;
use App\Models\proveedores;
use App\Models\unidades_de_medida;
use App\Models\unidades_de_medidas;
use Illuminate\Foundation\Console\ViewClearCommand;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Productos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $valor = "";
    public function create()
    {
        //

        $proveedores = proveedores::where(function ($query) {
            $query->where('nombres', 'like', "%{$this->valor}%")
                ->orWhere('apellidos', 'like', "%{$this->valor}%")
                ->orWhere('correo', 'like', "%{$this->valor}%");
        })
            ->get();

        $unidad_medidas = unidades_de_medidas::where(function ($query) {
            $query->where('descripcion', 'like', "%{$this->valor}%");
        })
            ->get();

        return view('Productos.crear', ['proveedores' => $proveedores], ['unidad_medidas' => $unidad_medidas]);
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
        productos::insert($datos);
        return view('Productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(productos $productos)
    {
        //
        return view('Productos.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $datos = productos::findOrFail($id);
        $proveedores = proveedores::where(function ($query) {
            $query->where('nombres', 'like', "%{$this->valor}%")
                ->orWhere('apellidos', 'like', "%{$this->valor}%")
                ->orWhere('correo', 'like', "%{$this->valor}%");
        })
            ->get();

        $unidad_medidas = unidades_de_medidas::where(function ($query) {
            $query->where('descripcion', 'like', "%{$this->valor}%");
        })
            ->get();
        return view(
            'Productos.editar',
            compact('datos'),
            [
                'proveedores' => $proveedores,
                'unidad_medidas' => $unidad_medidas
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        productos::where('id', '=', $id)
            ->delete();
        return redirect('/Productos')->with('message', 'Registro Eliminado ✔️');
    }
}
