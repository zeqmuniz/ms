<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
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

    //formulário para mostrar clientes
    public function mostrar()
    {
        return view('cliente/mostrar');
    }

    //Salvar no Banco
    public function store(ClienteRequest $request)
    {
        //Validar os Campos
        $request->validated();
        //salva os dados no banco
        Cliente::create($request->all());

        //redirecionamento
        return redirect()->route('cliente.mostrar')->with('sucesso', 'Cliente Cadastrado com sucesso!');

    }
}
