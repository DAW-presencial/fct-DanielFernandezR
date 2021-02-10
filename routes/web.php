<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresasFormController;
use App\Http\Controllers\Contacto;
use App\Http\Controllers\Inicio;

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

// Ruta de inicio
Route::get('/', [Inicio::class, 'showIndex']);

// Ruta para ir al panel del usuario
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Ruta de mostrar formulario y enviar formulario de empresas
Route::get('/empresas', [EmpresasFormController::class, 'createForm']);
Route::post('/empresas', [EmpresasFormController::class, 'EmpresasForm'])->name('empresas.store');

// Ruta de mostrar blog y enviar blog
Route::get('/contacto', [Contacto::class, 'showContacto']);
// Route::post('/empresas', [EmpresasFormController::class, 'EmpresasForm'])->name('empresas.store');