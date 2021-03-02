<?php

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
    return view('welcome');
});


Route::POST('/persona', [App\Http\Controllers\PersonaController::class, 'store'])->name('persona.store');
Route::get('/personas', [App\Http\Controllers\PersonaController::class, 'index'])->name('persona.index'); //listo
Route::get('/personas/{id}', [App\Http\Controllers\PersonaController::class, 'show'])->name('persona.show'); //listo
Route::get('/per', [App\Http\Controllers\PersonaController::class, 'create'])->name('persona.create');
Route::put('/personas/{persona}', [App\Http\Controllers\PersonaController::class, 'update'])->name('persona.update');
Route::delete('/personas/{persona}', [App\Http\Controllers\PersonaController::class, 'destroy'])->name('persona.destroy');