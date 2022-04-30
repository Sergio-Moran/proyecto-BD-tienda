<?php

namespace App\Http\Controllers;

use App\Models\inventario_productos;
use App\Models\productos;
use App\Models\proveedores;
use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;

class InventarioProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return 'inventario';
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
       
        $productos = Productos::where(function ($query) {
            $query->where('nombres', 'like', "%{$this->valor}%")
                ->orWhere('precio_venta', 'like', "%{$this->valor}%")
                ->orWhere('precio_compra', 'like', "%{$this->valor}%");
        })
        ->get();
        //return $productos;
        return view('Inventario.crear',['productos' => $productos]);
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
        inventario_productos::insert($datos);
        return view('Inventario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inventario_productos  $inventario_productos
     * @return \Illuminate\Http\Response
     */
    public function show(inventario_productos $inventario_productos)
    {
        //
        return view('Inventario.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inventario_productos  $inventario_productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $datos = inventario_productos::findOrFail($id);
        $productos = productos::where('id','=',$datos['cod_producto_fk'])
            ->get();
        return view(
            'Inventario.editar',
            compact('datos'),
            [
                'productos' => $productos,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inventario_productos  $inventario_productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inventario_productos $inventario_productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inventario_productos  $inventario_productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventario_productos $inventario_productos)
    {
        //
    }
}
