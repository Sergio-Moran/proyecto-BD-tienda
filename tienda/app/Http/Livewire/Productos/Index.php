<?php

namespace App\Http\Livewire\Productos;

use App\Models\productos;
use Livewire\Component;

class Index extends Component
{
    public $valor = "";
    public $porPagina = 10;

    public function render()
    {
        
        $productos = Productos::where(function ($query) {
            $query->where('nombres', 'like', "%{$this->valor}%")
                ->orWhere('precio_venta', 'like', "%{$this->valor}%")
                ->orWhere('precio_compra', 'like', "%{$this->valor}%");
        })
        ->limit($this->porPagina)
        ->get();

         return view('Productos.productos', ['productos' => $productos]);
    }
}
