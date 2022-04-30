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

        $productos = Productos::selectRaw('proveedores.nombres as nombreProveedor, productos.nombres as nombreProducto,
            productos.precio_venta, productos.precio_compra, unidades_de_medidas.descripcion, productos.codigo, 
            productos.estado')
            ->where(function ($query) {
                $query->where('productos.nombres', 'like', "%{$this->valor}%")
                    ->orWhere('productos.precio_venta', 'like', "%{$this->valor}%")
                    ->orWhere('productos.precio_compra', 'like', "%{$this->valor}%")
                    ->orWhere('proveedores.nombres', 'like', "%{$this->valor}%")
                    ->orWhere('unidades_de_medidas.descripcion', 'like', "%{$this->valor}%");
            })
            ->join('proveedores', 'proveedores.id', '=', 'productos.cod_proveedor_fk')
            ->join('unidades_de_medidas', 'unidades_de_medidas.codigo', '=', 'productos.cod_unidad_medida_fk')
            ->limit($this->porPagina)
            ->get();
        return view('Productos.productos', ['productos' => $productos]);
    }
}
