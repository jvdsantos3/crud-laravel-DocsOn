<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentoController;

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
    return to_route('documentos.index');
});

Route::get('/documentos', [DocumentoController::class, 'index'])->name('documentos.index');
Route::get('/documentos/create', [DocumentoController::class, 'create'])->name('documentos.create');
Route::get('/documentos/{documento}', [DocumentoController::class, 'show'])->name('documentos.show');
Route::get('/documentos/{documento}/edit', [DocumentoController::class, 'edit'])->name('documentos.edit');
