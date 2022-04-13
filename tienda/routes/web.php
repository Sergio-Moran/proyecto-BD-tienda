<?php

use App\Http\Controllers\ClientesController;
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

Route::get('/Inicio/index', [ClientesController::class, 'index'])->name('inicio.index');

Route::resource('/Accionistas', ControladorAccionista::class)
    ->middleware('auth')
    ->names('admin.accionistas');

