<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function showAll()
    {
        $clientes = DB::table('cliente')->get();
        return View('layout.cliente.index', compact('clientes'));
    }

    public function show($id = null)
    {
        $cliente = DB::table('cliente')->where('id', '=', $id)->first();
        return View('layout.cliente.cadastro', compact('cliente'));
    }

    public function add(Request $request)
    {
        $rules = [
            'nomeCliente' => 'required|max:255',
            'emailCliente' => 'required|email|max:255',
            'CPFCliente' => 'required|max:255',
            'cepCLiente' => 'required|max:255',
            'ruaCliente' => 'required|max:255',
            'numeroCliente' => 'required|max:255',
            'bairroCLiente' => 'required|max:255',
            'cidadeCLiente' => 'required|max:255',
            'estadoCLiente' => 'required|max:255',
        ];

        if ($request->has('senhaCliente')) {
            $rules['senhaCliente']  = 'required|min:8|max:255';
        }

        $this->validate($request, $rules);

        $dados = [
            'nome' => $request->input('nomeCliente', null),
            'email' => $request->input('emailCliente', null),
            'cpf' => $request->input('CPFCliente', null),
            'telefone' => $request->input('telefoneCliente', null),
            'celular' => $request->input('celularCliente', null),
            'cep' => $request->input('cepCLiente', null),
            'rua' => $request->input('ruaCliente', null),
            'numero' => $request->input('numeroCliente', null),
            'complemento' => $request->input('complementoCLiente', null),
            'bairro' => $request->input('bairroCLiente', null),
            'cidade' => $request->input('cidadeCLiente', null),
            'estado' => $request->input('estadoCLiente', null),
        ];

        if (DB::table('cliente')->insert($dados))
            return redirect()->route('clienteShowAll');

        return redirect()->back()->withErrors('Não foi possível cadastrar o cliente')->withInput();
    }

    public function update(Request $request)
    {
        $rules = [
            'emailCliente' => 'required|email|max:255',
            'nomeCliente' => 'required|max:255',
            'CPFCliente' => 'required|max:255',
            'cepCLiente' => 'required|max:255',
            'ruaCliente' => 'required|max:255',
            'numeroCliente' => 'required|max:255',
            'bairroCLiente' => 'required|max:255',
            'cidadeCLiente' => 'required|max:255',
            'estadoCLiente' => 'required|max:255',
        ];

        if ($request->has('senhaCliente')) {
            $rules['senhaCliente']  = 'required|min:8|max:255';
        }

        $this->validate($request, $rules);

        $dados = [
            'nome' => $request->input('nomeCliente', null),
            'email' => $request->input('emailCliente', null),
            'cpf' => $request->input('CPFCliente', null),
            'telefone' => $request->input('telefoneCliente', null),
            'celular' => $request->input('celularCliente', null),
            'cep' => $request->input('cepCLiente', null),
            'rua' => $request->input('ruaCliente', null),
            'numero' => $request->input('numeroCliente', null),
            'complemento' => $request->input('complementoCLiente', null),
            'bairro' => $request->input('bairroCLiente', null),
            'cidade' => $request->input('cidadeCLiente', null),
            'estado' => $request->input('estadoCLiente', null),
        ];

        if (DB::table('cliente')->where('id', '=', $request->input('idCliente', null))->update($dados))
            return redirect()->route('clienteShowAll');

        return redirect()->back()->withErrors('Não foi possível atualizar o cliente')->withInput();
    }

    public function deletar(Request $request)
    {
        if (DB::table('cliente')->where('id', '=', $request->input('idCliente', null))->delete())
            return redirect()->route('clienteShowAll');

        return redirect()->back()->withErrors('Não foi possível atualizar o cliente')->withInput();
    }
}
