<?php

namespace App\Http\Livewire\Cliente;

use App\Models\dato_usuarios;
use Livewire\Component;

class Index extends Component
{
    public $valor = "";
    public $porPagina = 100;

    public function render()
    {
        $usuarios = dato_usuarios::where('users.cod_dato_usuario_fk','=',request()->user()->id)
        ->join('users', 'dato_usuarios.codigo', '=', 'users.cod_dato_usuario_fk')
            ->limit($this->porPagina)
            ->get();

        return view('Clientes.perfil', ['usuarios' => $usuarios]);
    }
}
