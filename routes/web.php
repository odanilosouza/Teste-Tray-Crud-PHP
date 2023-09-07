<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendController;
use App\Http\Controllers\VendedorController;
use App\Models\Vendedor;

//Rotas para vendedores
Route::get('/vendedores', [VendedorController::class, 'index']);
Route::get('/vendedores/create', [VendedorController::class, 'create']);
Route::post('/vendedores/store', [VendedorController::class, 'store']);
Route::get('/vendedores/{id}/edit', [VendedorController::class, 'edit']);
Route::put('/vendedores/{id}/update', [VendedorController::class, 'update']);
Route::delete('/vendedores/{id}', [VendedorController::class, 'delete']);


//Rotas para vendas

Route::get('/vendas', [VendController::class, 'index']);
Route::get('/vendas/create', [VendController::class, 'create']);
Route::post('/vendas/store', [VendController::class, 'store']);
Route::get('/vendas/{id}/edit', [VendController::class, 'edit']);
Route::put('/vendas/{id}/update', [VendController::class, 'update']);
Route::delete('/vendas/{id}', [VendController::class, 'delete']);













Route::get('/', function () {
    return view('welcome');
});
