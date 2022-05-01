<?php

namespace App\Http\Livewire\Medidas;

use App\Models\unidades_de_medidas;
use Livewire\Component;

class Index extends Component
{
    public $porPagina = 100;

    public function render()
    {
        $medidas = unidades_de_medidas::select('*')
        ->limit($this->porPagina)
        ->get();
        return view('Medidas.medida', ['medidas' => $medidas]);
    }
}
