<?php

namespace App\Http\Livewire\Ventas;

use App\Models\clientes;
use App\Models\productos;
use Livewire\Component;

class Index extends Component
{

    public $valor ="";
    
    protected $listener = ['agregarProd' => 'AgregarProducto'];

    public $producto;
    public $cantidad;

    public function render()
    {
        $productos = productos::where(function ($query) {
            $query->where('nombres', 'like', "%{$this->valor}%")
                ->orWhere('precio_venta', 'like', "%{$this->valor}%")
                ->orWhere('precio_compra', 'like', "%{$this->valor}%");
        })
        ->get();

        $clientes = clientes::where(function ($query) {
            $query->where('nombre', 'like', "%{$this->valor}%");
        })
        ->get();

        return view('Ventas.ventas',['productos' => $productos, 'clientes'=> $clientes]);
    }

    public function AgregarProducto(){

    }

    public function Producto(){

    }
    

    public function submit(){
        $this->emit('producto-cambiado');
       dd($this->producto = $this->producto); 
    }
}
