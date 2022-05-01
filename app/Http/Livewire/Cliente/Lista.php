<?php

namespace App\Http\Livewire\Cliente;

use App\Models\clientes;
use Livewire\Component;

class Lista extends Component
{

    public $porPagina = 100;

    public function render()
    {
        $clientes = clientes::select('*')
            ->limit($this->porPagina)
            ->get();
        return view('Clientes.cliente', ['clientes' => $clientes]);
    }
}
