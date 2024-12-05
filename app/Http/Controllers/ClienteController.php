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
        $cliente = Cliente::orderBy('nome')->get();

        return view('cliente/index', ['cliente' => $cliente]);
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
        return redirect()->route('cliente.index')->with('sucesso', 'Cliente Cadastrado com sucesso!');

    }

    //Visualizar o registro selecionado
    public function editar(cliente $cliente)
    {
        return view('cliente/editar', ['cliente' => $cliente]);

    }

    //Alterar o registro selecionado
    public function update(ClienteRequest $request, cliente $cliente)
    {
        //Validar os Campos
        $request->validated();

        //Atualizar dados do registro no banco
        $cliente->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'fone' => $request->fone,
            'nascimento' => $request->nascimento,

        ]);

        //redirecionamento
        return redirect()->route('cliente.index')->with('sucesso', 'Cliente Atualizado com sucesso!');

    }
}
