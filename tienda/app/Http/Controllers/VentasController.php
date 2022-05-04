<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use App\Models\detalles_facturas;
use App\Models\facturas;
use App\Models\productos;
use App\Models\ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return 'Ventas';
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
    public $valor = "";
    public function store(Request $request)
    {
        //

        $datos = $request->except('_token');
        $datos['cod_usuario_fk'] = request()->user()->id;

        facturas::insert($datos);

        $id = facturas::orderBy('id', 'desc')->first();
        $clientes = clientes::where(function ($query) {
            $query->where('nombre', 'like', "%{$this->valor}%");
        })
            ->get();
        $productos = productos::where(function ($query) {
            $query->where('nombres', 'like', "%{$this->valor}%")
                ->orWhere('precio_venta', 'like', "%{$this->valor}%")
                ->orWhere('precio_compra', 'like', "%{$this->valor}%");
        })
            ->get();

        $tabProductos = [];


        return view('Ventas.crear', ['id' => $id['id'], 'clientes' => $clientes, 'productos' => $productos, 'tabProductos' => $tabProductos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function show(ventas $ventas)
    {
        //
        return view('Ventas.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function edit(ventas $ventas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ventas $ventas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        detalles_facturas::where('cod_factura_fk', '=', $id)
            ->delete();
        facturas::where('id', '=', $id)
            ->delete();
        return redirect('/Inicio/index')->with('message', 'Registro Eliminado ✔️');
    }

    public function vendido($id)
    {
        //

        $suma =  detalles_facturas::where('cod_factura_fk', '=', $id)->sum('subtotal');
        facturas::where('id', '=', $id)->update(['total' => $suma]);
        facturas::where('id', '=', $id)->update(['estado_pagado' => true]);

        return redirect('/Inicio/index')->with('message', 'Registro Eliminado ✔️');
    }

    public function carrito(Request $request)
    {
        $datos = $request->except('_token');
        $id = $datos['cod_factura_fk'];
        $precios = productos::where('id', '=', $datos['cod_producto_fk'])->get();
        foreach ($precios as $precio) {
            $res = $precio->precio_venta;
        }
        $datos['subtotal'] = $datos['cantidad'] * $res;

        detalles_facturas::insert($datos);
        $productos = productos::where(function ($query) {
            $query->where('nombres', 'like', "%{$this->valor}%")
                ->orWhere('precio_venta', 'like', "%{$this->valor}%")
                ->orWhere('precio_compra', 'like', "%{$this->valor}%");
        })
            ->get();
        $tabProductos = detalles_facturas::where('cod_factura_fk', '=', $id)
            ->join('productos', 'detalles_facturas.cod_producto_fk', '=', 'productos.id')
            ->get();

/* 
         return $productos;  */
        return view('Ventas.crear', ['id' => $id, 'productos' => $productos, 'tabProductos' => $tabProductos]);
    }
}
