<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FornecedorController extends Controller
{
    public function showAll()
    {
        $fornecedores = DB::table('fornecedor')->get();
        return View('layout.fornecedor.index', compact('fornecedores'));
    }

    public function show($id = null)
    {
        $fornecedor = DB::table('fornecedor')->where('id', '=', $id)->first();
        return View('layout.fornecedor.cadastro', compact('fornecedor'));
    }

    public function add(Request $request)
    {
        $rules = [
            'CNPJFornecedor' => 'required|max:255',
            'razaoSocialFornecedor' => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $dados = [
            'razaosocial' => $request->input('razaoSocialFornecedor', null),
            'cnpj' => $request->input('CNPJFornecedor', null),
        ];

        if (DB::table('fornecedor')->insert($dados))
            return redirect()->route('fornecedorShowAll');

        return redirect()->back()->withErrors('Não foi possível cadastrar o fornecedor')->withInput();
    }

    public function update(Request $request)
    {
        $rules = [
            'CNPJFornecedor' => 'required|max:255',
            'razaoSocialFornecedor' => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $dados = [
            'razaosocial' => $request->input('razaoSocialFornecedor', null),
            'cnpj' => $request->input('CNPJFornecedor', null),
        ];

        if (DB::table('fornecedor')->where('id', '=', $request->input('id', null))->update($dados))
            return redirect()->route('fornecedorShowAll');

        return redirect()->back()->withErrors('Não foi possível atualizar o fornecedor')->withInput();
    }

    public function deletar(Request $request)
    {
        DB::table('fornecedor')->delete($request->input('idFornecedor', null));
        return redirect()->route('fornecedorShowAll');
    }
}
