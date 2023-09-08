<?php

use App\Http\Controllers\Mails\RelatorioVendasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendController;
use App\Http\Controllers\VendedorController;
use App\Models\Vendedor;

//Rotas para vendedores
Route::get('/', [VendedorController::class,'welcome']);
Route::get('/vendedores', [VendedorController::class, 'index']);
Route::get('/vendedores/create', [VendedorController::class, 'create']);
Route::post('/vendedores/store', [VendedorController::class, 'store']);
Route::get('/vendedores/{id}/edit', [VendedorController::class, 'edit']);
Route::put('/vendedores/{id}/update', [VendedorController::class, 'update'])->name('vendedores.update');
Route::get('/vendedores/{id}/delete', [VendedorController::class, 'delete']);


//Rotas para vendas

Route::get('/vendedores/{vendedorId}/vendas', [VendController::class, 'vendas']);
Route::get('/vendedores/{vendedorId}/cadastrar_venda', [VendController::class, 'createView']);
Route::post('/vendedores/{vendedorId}/vendas', [VendController::class, 'post']);
// Route::get('/vendedores/{id}/vendas/{id}', [VendController::class, 'edit']);
// Route::put('/vendedores/{id}/vendas/{id}', [VendController::class, 'update']);
// Route::delete('/vendedores/{id}/vendas/{id}', [VendController::class, 'delete']);


