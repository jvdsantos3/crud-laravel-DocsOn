<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DocumentoController;
use App\Http\Controllers\Api\TipoDocumentoController;   

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/documentos', [DocumentoController::class, 'store']);
Route::put('/documentos/{documento}', [DocumentoController::class, 'update']);
Route::delete('/documentos/{documento}', [DocumentoController::class, 'destroy']);

Route::get('/tipos', [TipoDocumentoController::class, 'index']);
