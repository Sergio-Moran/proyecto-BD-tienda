<?php

namespace App\Http\Livewire\Reportes;

use App\Models\facturas as ModelsFacturas;
use Livewire\Component;

class Facturas extends Component
{
    public $valor = "";
    public $porPagina = 100;
    public function render()
    {
        $facturas = ModelsFacturas::select('*')
            ->where('estado_pagado', '=', 1)
            ->selectRaw('facturas.id as idFactura')
            ->join('users', 'users.id', '=', 'facturas.cod_usuario_fk')
            ->join('clientes', 'clientes.id', '=', 'facturas.cod_cliente_fk')
            ->limit($this->porPagina)
            ->get();
        /* dd($facturas); */
        return view('Facturas.factura', ['facturas' => $facturas]);
    }
}
