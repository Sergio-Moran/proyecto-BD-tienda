<?php

namespace App\Http\Livewire\Proveedores;

use App\Models\proveedores;
use Livewire\Component;

class Index extends Component
{

    public $valor = "";
    public $porPagina = 100;


    public function render()
    {
        $proveedores = proveedores::select('*')
        ->limit($this->porPagina)
        ->get();
        return view('Proveedores.proveedor', ['proveedores' => $proveedores]);
    }
}
