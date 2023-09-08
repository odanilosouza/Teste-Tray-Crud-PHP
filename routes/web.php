<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\VendedorController;

//Rotas para vendedores
Route::get('/', [VendedorController::class, 'listarTodosVendedores']);
Route::get('/vendedores', [VendedorController::class, 'listarTodosVendedores']);
Route::get('/vendedores/cadastrar', [VendedorController::class, 'createView']);
Route::post('/vendedores', [VendedorController::class, 'create']);
Route::get('/vendedores/{id}/edit', [VendedorController::class, 'editView']);
Route::put('/vendedores/{id}/update', [VendedorController::class, 'update'])->name('vendedores.update');
Route::get('/vendedores/{id}/delete', [VendedorController::class, 'delete']);

//Rotas para vendas
Route::get('/vendedores/{vendedorId}/vendas', [VendaController::class, 'vendas']);
Route::get('/vendedores/{vendedorId}/cadastrar_venda', [VendaController::class, 'createView']);
Route::post('/vendedores/{vendedorId}/vendas', [VendaController::class, 'post']);
