<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendController;

Route::get('/vend/create', [VendController::class, ' create']);
Route::get('/Vend/read', [VendController::class, 'read']);
Route::get('Vend/all', [VendController::class, 'all']);
Route::get('/Vend/update',[VendController::class, 'update']);
Route::get('/Vend/delete', [VendController::class, 'delete']);

Route::get('/', function () {
    return view('welcome');
});
