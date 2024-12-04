<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //listagem de clientes
    public function index()
    {
        return view('cliente/index');
    }

    //formulário para cadastrar novo cliente
    public function criar()
    {
        return view('cliente/criar');
    }
}
