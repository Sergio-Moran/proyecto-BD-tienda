<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FacturasController;
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

Route::get('/Proveedor/{id}/destroy', [ProveedoresController::class, 'destroy'])
    ->name('destroy');

Route::get('/Medida/{id}/destroy', [UnidadesDeMedidaController::class, 'destroy'])
    ->name('destroy');

Route::get('/Productos/{id}/destroy', [ProductosController::class, 'destroy'])
    ->name('destroy');

Route::get('/Cliente/{id}/destroy', [ClientesController::class, 'destroy'])
    ->name('destroy');

Route::get('/Ventas/{id}/destroy', [VentasController::class, 'destroy'])
    ->name('destroy');

Route::get('/Ventas/{id}/vendido', [VentasController::class, 'vendido'])
    ->name('vendido');

Route::get('/Inventario/{id}/destroy', [InventarioProductosController::class, 'destroy'])
    ->name('destroy');

Route::get('/Inicio/index', [ClientesController::class, 'index'])
    ->name('inicio.index');

Route::get('/Facturas/index', [FacturasController::class, 'index'])
    ->name('inicio.index');

Route::get('/Cliente/lista', [ClientesController::class, 'cliente'])
    ->name('cliente.lista');

Route::get('/Cliente/Reportes', [ClientesController::class, 'reporte'])
    ->name('cliente.reportes');

Route::get('/Cliente/Reportes/datos', [Reportes::class, 'datos'])
    ->name('cliente.reportes');

Route::get('/Cliente/usuarios', [ClientesController::class, 'create'])
    ->name('cliente.usuario');

Route::post('/Cliente/store', [ClientesController::class, 'usuario']);

Route::get('/Cliente/Perfil', [ClientesController::class, 'perfil'])
    ->name('cliente.perfil');

Route::post('/Ventas/Carrito', [VentasController::class, 'carrito'])
    ->name('cliente.perfil');

Route::get('/Factura/{id}', [Reportes::class, 'factura'])
    ->name('factura');

Route::post('/ReporteUno', [Reportes::class, 'reporteUno'])
    ->name('reporteUno');

Route::get('/ReporteDos', [Reportes::class, 'reporteDos'])
    ->name('reporteDos');

Route::get('/ReporteTres', [Reportes::class, 'reporteTres'])
    ->name('reporteTres');

Route::get('/ReporteCuatro', [Reportes::class, 'reporteCuatro'])
    ->name('reporteCuatro');

/* Route::get('/ReporteCinco', [Reportes::class, 'reporteCinco'])
    ->name('reporteCinco'); */

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

Route::resource('/Facturas', FacturasController::class)
    ->middleware('auth')
    ->names('facturas.inicio');


Route::resource('/Medida', UnidadesDeMedidaController::class)
    ->middleware('auth')
    ->names('medida.inicio');

Route::resource('/RolUsuarios', RolUsuarioController::class)
    ->middleware('auth')
    ->names('RolUsuarios.inicio');
