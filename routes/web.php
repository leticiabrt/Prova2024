<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/local', [App\Http\Controllers\Controlador::class, 'index'])->name('indexLocal');
Route::get('/local/novo', [App\Http\Controllers\Controlador::class, 'create'])->name('novoLocal');
Route::post('/local', [App\Http\Controllers\Controlador::class, 'store'])->name('gravaNovaViagem');
Route::get('/local/editar/{id}', [App\Http\Controllers\Controlador::class, 'edit'])->name('editarLocal');
Route::post('/local/{id}', [App\Http\Controllers\Controlador::class, 'update'])->name('atualizaLocal');
Route::get('/local/apagar/{id}', [App\Http\Controllers\Controlador::class, 'destroy'])->name('deletaLocal');
