<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\InventarioProductosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\Reportes;
use App\Http\Controllers\RolUsuarioController;
use App\Http\Controllers\UnidadesDeMedidaController;
use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('login'));
});

Route::get('/Proveedor/{id}/destroy', [ProveedoresController::class, 'destroy'])->name('destroy');

Route::get('/Productos/{id}/destroy', [ProductosController::class, 'destroy'])->name('destroy');

Route::get('/Inicio/index', [ClientesController::class, 'index'])
    ->name('inicio.index');

Route::get('/Cliente/Reportes', [ClientesController::class, 'reporte'])
    ->name('cliente.reportes');

Route::get('/Cliente/usuarios', [ClientesController::class, 'create'])
    ->name('cliente.usuario');

Route::post('/Cliente/store', [ClientesController::class, 'usuario']);

Route::get('/Cliente/Perfil', [ClientesController::class, 'perfil'])
    ->name('cliente.perfil');

Route::get('/ReporteUno', [Reportes::class, 'reporteUno'])
    ->name('reporteUno');

Route::resource('/Productos', ProductosController::class)
    ->middleware('auth')
    ->names('productos.incio');

Route::resource('/Cliente', ClientesController::class)
    ->middleware('auth')
    ->names('clientes.perfil');

Route::resource('/Inventario', InventarioProductosController::class)
    ->middleware('auth')
    ->names('inventario.inicio');

Route::resource('/Ventas', VentasController::class)
    ->middleware('auth')
    ->names('ventas.inicio');

Route::resource('/Proveedor', ProveedoresController::class)
    ->middleware('auth')
    ->names('proveedor.inicio');

    Route::resource('/Medida', UnidadesDeMedidaController::class)
    ->middleware('auth')
    ->names('medida.inicio');

Route::resource('/RolUsuarios', RolUsuarioController::class)
    ->middleware('auth')
    ->names('RolUsuarios.inicio');
