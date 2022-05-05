<?php

namespace App\Http\Controllers;

use App\Models\detalles_facturas;
use App\Models\facturas;
use App\Models\inventario_productos;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Reportes extends Controller
{
    //
    public function factura($id)
    {

        $facturas = detalles_facturas::selectRaw(
            'facturas.total, clientes.nombre, clientes.apellido, 
            facturas.descripcion, facturas.ciudad,users.name, clientes.nit,productos.nombres, 
            productos.precio_venta, detalles_facturas.cantidad, detalles_facturas.subtotal, 
            productos.precio_compra, productos.estado, productos.id as idProductos'
        )
            ->join('facturas', 'facturas.id', '=', 'detalles_facturas.cod_factura_fk')
            ->join('users', 'users.id', '=', 'facturas.cod_usuario_fk')
            ->join('clientes', 'clientes.id', '=', 'facturas.cod_cliente_fk')
            ->where('facturas.estado_pagado', '=', 1)
            ->where('facturas.id', '=', $id)
            ->orderBy('facturas.id', 'desc')
            ->join('productos', 'detalles_facturas.cod_producto_fk', '=', 'productos.id')
            ->get();

        /* return $facturas; */
        $pdf = PDF::loadView('Reportes.factura', compact('facturas'))
            ->setPaper("legal", 'landscape')
            ->stream('.pdf');

        return $pdf;
    }

    public function reporteUno(Request $request)
    {
        /*  SELECT productos.nombres, SUM(detalles_facturas.cantidad) ventas
        FROM detalles_facturas, facturas, productos
        WHERE detalles_facturas.cod_factura_fk = facturas.id
        AND detalles_facturas.cod_producto_fk = productos.id
        AND DATE_FORMAT(facturas.updated_at, '%Y-%m-%d') 
        BETWEEN '' AND '2022-05-04'
        GROUP BY productos.nombres
        ORDER BY ventas DESC */

        $res = $request->except('_token');

        $fechaini = $request->inicio;
        $fechafin= $request->final;

        $date = Carbon::now();
        $datos = detalles_facturas::selectRaw('productos.nombres, SUM(detalles_facturas.cantidad) as ventas')
            ->join('facturas', 'facturas.id', '=', 'detalles_facturas.cod_factura_fk')
            ->join('productos', 'detalles_facturas.cod_producto_fk', '=', 'productos.id')
            ->whereBetween('facturas.updated_at', [$fechaini, $fechafin])/* ->format('Y-m-d') */
            ->groupBy('productos.nombres')
            ->orderBy('ventas', 'desc')
            ->get();

        $pdf = PDF::loadView('Reportes.reporteUno', compact('datos'))
            ->setPaper("legal", 'landscape')
            ->stream('.pdf');

        return $pdf;
    }

    public function reporteDos()
    {

        $datos = detalles_facturas::selectRaw('productos.nombres, SUM(detalles_facturas.cantidad) as cantidadVenta')
            ->join('facturas', 'facturas.id', '=', 'detalles_facturas.cod_factura_fk')
            ->join('productos', 'detalles_facturas.cod_producto_fk', '=', 'productos.id')
            ->where('facturas.estado_pagado', '=', 1)
            ->groupBy('detalles_facturas.cod_producto_fk')
            ->orderBy('cantidadVenta', 'desc')
            ->get();

        $pdf = PDF::loadView('Reportes.reporteDos', compact('datos'))
            ->setPaper("legal", 'landscape')
            ->stream('.pdf');

        return $pdf;
    }

    public function reporteTres()
    {

        $datos = inventario_productos::selectRaw('inventario_productos.id, inventario_productos.updated_at, descripcion, productos.nombres,  cantidad')
            ->join('productos', 'inventario_productos.cod_producto_fk', '=', 'productos.id')
            ->get();

        /* return $datos; */

        $pdf = PDF::loadView('Reportes.reporteTres', compact('datos'))
            ->setPaper("legal", 'landscape')
            ->stream('.pdf');

        return $pdf;
    }

    public function reporteCuatro()
    {

        $datos = facturas::selectRaw('clientes.nombre, SUM(facturas.estado_pagado) as compras ')
            ->join('clientes', 'facturas.cod_cliente_fk', '=', 'clientes.id')
            ->where('facturas.estado_pagado', '=', 1)
            ->groupBy('clientes.nombre')
            ->orderBy('compras', 'desc')
            ->get();

        /* return $datos; */

        $pdf = PDF::loadView('Reportes.reporteCuatro', compact('datos'))
            ->setPaper("legal", 'landscape')
            ->stream('.pdf');

        return $pdf;
    }


    public function datos(){
        return view('Reportes.datos');
    }
}
