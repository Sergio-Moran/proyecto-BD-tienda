<?php

namespace App\Http\Livewire\Ventas;

use App\Models\productos;
use Livewire\Component;

class Index extends Component
{
    public $valor ="";
    public function render()
    {
        $productos = productos::where(function ($query) {
            $query->where('nombres', 'like', "%{$this->valor}%")
                ->orWhere('precio_venta', 'like', "%{$this->valor}%")
                ->orWhere('precio_compra', 'like', "%{$this->valor}%");
        })
        ->get();
        return view('Ventas.ventas',['productos' => $productos]);
    }
}
