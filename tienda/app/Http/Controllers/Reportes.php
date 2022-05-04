<?php

namespace App\Http\Controllers;

use App\Models\detalles_facturas;
use App\Models\facturas;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class Reportes extends Controller
{
    //
    public function factura($id)
    {

        $facturas = detalles_facturas::selectRaw('facturas.total, clientes.nombre, clientes.apellido, 
                        facturas.descripcion, facturas.ciudad,users.name, clientes.nit,productos.nombres, 
                        productos.precio_venta, detalles_facturas.cantidad, detalles_facturas.subtotal, 
                        productos.precio_compra, productos.estado, productos.id as idProductos')
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

    public function reporteUno()
    {
        $pdf = PDF::loadView('Reportes.reporteUno'/*, compact('') */)
            ->setPaper("legal", 'landscape')
            ->stream('.pdf');

        return $pdf;
    }

    public function reporteDos()
    {
        /* SELECT productos.nombres, SUM(detalles_facturas.cantidad) as cantidadVenta FROM detalles_facturas, facturas, productos
        WHERE detalles_facturas.cod_factura_fk = facturas.id
        AND detalles_facturas.cod_producto_fk = productos.id
        AND facturas.estado_pagado = 1
        GROUP BY detalles_facturas.cod_producto_fk
        ORDER BY cantidadVenta DESC */

        $datos=detalles_facturas::selectRaw('productos.nombres, SUM(detalles_facturas.cantidad) as cantidadVenta')
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
        $pdf = PDF::loadView('Reportes.reporteTres'/*, compact('') */)
            ->setPaper("legal", 'landscape')
            ->stream('.pdf');

        return $pdf;
    }

    public function reporteCuatro()
    {
        $pdf = PDF::loadView('Reportes.reporteCuatro'/*, compact('') */)
            ->setPaper("legal", 'landscape')
            ->stream('.pdf');

        return $pdf;
    }

    public function reporteCinco()
    {
        $pdf = PDF::loadView('Reportes.reporteCinco'/*, compact('') */)
            ->setPaper("legal", 'landscape')
            ->stream('.pdf');

        return $pdf;
    }
}
