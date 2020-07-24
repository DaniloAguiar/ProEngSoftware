<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetController extends Controller
{
    public function showAll()
    {
        $pets = DB::table('pet')->get();
        return View('layout.pet.index', compact('pets'));
    }

    public function show($id = null)
    {
        $pet = DB::table('pet')->where('id', '=', $id)->first();
        return View('layout.pet.cadastro', compact('pet'));
    }

    public function add(Request $request)
    {
        $rules = [
            'nomePet' => 'required|max:255',
            'racaPet' => 'required|max:255',
            'pesoPet' => 'required|max:255',
            'idadePet' => 'required|max:255',
            'sexoPet' => 'required|max:255',
            'idCliente' => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $dados = [
            'nome' => $request->input('nomePet', null),
            'raca' => $request->input('racaPet', null),
            'peso' => $request->input('pesoPet', null),
            'idade' => $request->input('idadePet', null),
            'sexo' => $request->input('sexoPet', null),
            'id_cliente' => $request->input('idCliente', null),
        ];

        if (DB::table('pet')->insert($dados))
            return redirect()->route('petShowAll');

        return redirect()->back()->withErrors('Não foi possível cadastrar o pet')->withInput();
    }

    public function update(Request $request)
    {
        $rules = [
            'nomePet' => 'required|max:255',
            'racaPet' => 'required|max:255',
            'pesoPet' => 'required|max:255',
            'idadePet' => 'required|max:255',
            'sexoPet' => 'required|max:255',
            'idCliente' => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $dados = [
            'nome' => $request->input('nomePet', null),
            'raca' => $request->input('racaPet', null),
            'peso' => $request->input('pesoPet', null),
            'idade' => $request->input('idadePet', null),
            'sexo' => $request->input('sexoPet', null),
            'id_cliente' => $request->input('idCliente', null),
        ];

        if (DB::table('pet')->where('id', '=', $request->input('id', null))->update($dados))
            return redirect()->route('petShowAll');

        return redirect()->back()->withErrors('Não foi possível atualizar o cliente')->withInput();
    }

    public function deletar(Request $request)
    {
        DB::table('pet')->delete($request->input('idPet', null));
        return redirect()->route('petShowAll');
    }
}
