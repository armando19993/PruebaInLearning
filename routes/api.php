<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('contactos', [ContactosController::class, 'index']);
Route::get('search/{q}', [ContactosController::class, 'search']);
Route::get('contacto/{contacto}', [ContactosController::class, 'show']);
Route::post('contacto', [ContactosController::class, 'store']);
Route::post('update_contacto/{contacto}', [ContactosController::class, 'update']);