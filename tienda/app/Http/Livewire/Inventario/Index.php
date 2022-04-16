<?php

namespace App\Http\Livewire\Inventario;

use App\Models\inventario_productos;
use App\Models\productos;
use Livewire\Component;

class Index extends Component
{
    public $valor = "";
    public $porPagina = 10;

    public function render()
    {
        
        $inventario_productos = inventario_productos::where(function ($query) {
            $query->where('inventario_productos.descripcion', 'like', "%{$this->valor}%")
                ->orWhere('inventario_productos.cantidad', 'like', "%{$this->valor}%")
                ->orWhere('productos.nombres', 'like', "%{$this->valor}%");
        })
        ->join('productos', 'productos.codigo', '=', 'inventario_productos.cod_producto_fk')
        ->limit($this->porPagina)
        ->get();

         return view('inventario.inventario', ['inventario_productos' => $inventario_productos]);
    }
}
