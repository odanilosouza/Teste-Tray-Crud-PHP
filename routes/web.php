<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Mails\RelatorioVendasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendController;
use App\Http\Controllers\VendedorController;
use App\Models\Vendedor;

//Rotas para vendedores
Route::get('/', [VendedorController::class, 'listarTodosVendedores']);
Route::get('/vendedores', [VendedorController::class, 'listarTodosVendedores']);
Route::get('/vendedores/cadastrar', [VendedorController::class, 'createView']);
Route::post('/vendedores', [VendedorController::class, 'create']);
Route::get('/vendedores/{id}/edit', [VendedorController::class, 'editView']);
Route::put('/vendedores/{id}/update', [VendedorController::class, 'update'])->name('vendedores.update');
Route::get('/vendedores/{id}/delete', [VendedorController::class, 'delete']);

//Rotas para vendas
Route::get('/vendedores/{vendedorId}/vendas', [VendController::class, 'vendas']);
Route::get('/vendedores/{vendedorId}/cadastrar_venda', [VendController::class, 'createView']);
Route::post('/vendedores/{vendedorId}/vendas', [VendController::class, 'post']);
