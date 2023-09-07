<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendController;
use App\Http\Controllers\VendedorController;

Route::get('/vendedores', [VendedorController::class], 'index');
Route::get('vendas', [VendController::class]);

Route::get('/', function () {
    return view('welcome');
});
