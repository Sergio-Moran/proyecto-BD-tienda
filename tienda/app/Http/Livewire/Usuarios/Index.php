<?php

namespace App\Http\Livewire\Usuarios;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $usuario=request()->user()->rol;
        return view('Usuarios.crear');
    }
}
