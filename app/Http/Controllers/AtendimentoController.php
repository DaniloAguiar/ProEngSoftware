<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AtendimentoController extends Controller
{
    public function showAll()
    {
        $atendimentos = DB::table('atendimento')->select([
            'atendimento.*',
            'pet.nome'
        ])->leftJoin('pet', 'atendimento.id_pet', 'pet.id')->get();
        return View('layout.atendimento.index', compact('atendimentos'));
    }

    public function show($id = null)
    {
        $atendimento = DB::table('atendimento')->where('id', '=', $id)->first();
        return View('layout.atendimento.cadastro', compact('atendimento'));
    }

    public function add(Request $request)
    {
        $rules = [
            'idPet' => 'required|max:255',
            'dataDoAtendimento' => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $dados = [
            'id_pet' => $request->input('idPet', null),
            'data_do_atendimento' => $request->input('dataDoAtendimento', null),
        ];

        if (DB::table('atendimento')->insert($dados))
            return redirect()->route('atendimentoShowAll');

        return redirect()->back()->withErrors('Não foi possível cadastrar o Atendimento')->withInput();
    }

    public function update(Request $request)
    {
    }

    public function deletar(Request $request)
    {
    }

}
