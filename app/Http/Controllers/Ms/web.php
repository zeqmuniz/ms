<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
//rota index do cliente
Route::get('/index-cliente', [ClienteController::class, 'index'])->name('cliente.index');

//rota do formulariopara cadastrar cliente
Route::get('/criar-cliente', [ClienteController::class, 'criar'])->name('cliente.criar');


