<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function showAll()
    {
        $produtos = DB::table('produto')->get();
        return View('layout.produto.index', compact('produtos'));
    }

    public function show($id = null)
    {
        $produto = DB::table('produto')->where('id', '=', $id)->first();
        return View('layout.produto.cadastro', compact('produto'));
    }

    public function add(Request $request)
    {
        $rules = [
            'nomeProduto' => 'required|max:255',
            'racaProduto' => 'required|max:255',
            'pesoProduto' => 'required|max:255',
            'idadeProduto' => 'required|max:255',
            'sexoProduto' => 'required|max:255',
            'idCliente' => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $dados = [
            'nome' => $request->input('nomeProduto', null),
            'raca' => $request->input('racaProduto', null),
            'peso' => $request->input('pesoProduto', null),
            'idade' => $request->input('idadeProduto', null),
            'sexo' => $request->input('sexoProduto', null),
            'id_cliente' => $request->input('idCliente', null),
        ];

        if (DB::table('produto')->insert($dados))
            return redirect()->route('produtoShowAll');

        return redirect()->back()->withErrors('Não foi possível cadastrar o produto')->withInput();
    }

    public function update(Request $request)
    {
        $rules = [
            'nomeProduto' => 'required|max:255',
            'racaProduto' => 'required|max:255',
            'pesoProduto' => 'required|max:255',
            'idadeProduto' => 'required|max:255',
            'sexoProduto' => 'required|max:255',
            'idCliente' => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $dados = [
            'nome' => $request->input('nomeProduto', null),
            'raca' => $request->input('racaProduto', null),
            'peso' => $request->input('pesoProduto', null),
            'idade' => $request->input('idadeProduto', null),
            'sexo' => $request->input('sexoProduto', null),
            'id_cliente' => $request->input('idCliente', null),
        ];

        if (DB::table('produto')->where('id', '=', $request->input('id', null))->update($dados))
            return redirect()->route('produtoShowAll');

        return redirect()->back()->withErrors('Não foi possível atualizar o produto')->withInput();
    }

    public function deletar(Request $request)
    {
        DB::table('produto')->delete($request->input('idProduto', null));
        return redirect()->route('produtoshowAll');
    }
}
