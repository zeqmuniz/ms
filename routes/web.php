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

//rota para colsultar dados no banco
Route::get('/mostrar-cliente', [ClienteController::class, 'mostrar'])->name('cliente.mostrar');

//rota para salvar dados no banco
Route::post('/store-cliente', [ClienteController::class, 'store'])->name('cliente.store');

//Visualizar registro pelo id
Route::get('/editar-cliente/{cliente}', [ClienteController::class, 'editar'])->name('cliente.editar');

//Atualizar o registro no banco
Route::put('/update-cliente/{cliente}', [ClienteController::class, 'update'])->name('cliente.update');


