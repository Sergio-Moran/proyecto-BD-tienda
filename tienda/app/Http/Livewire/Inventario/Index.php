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
            $query->where('descripcion', 'like', "%{$this->valor}%")
                ->orWhere('cantidad', 'like', "%{$this->valor}%")
                ->orWhere('cod_producto', 'like', "%{$this->valor}%");
        })
        ->limit($this->porPagina)
        ->get();

         return view('inventario.inventario', ['inventario_productos' => $inventario_productos]);
    }
}
