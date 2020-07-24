@extends('base._base')

@section('body')

<h1 class="is-size-3  has-text-weight-light has-text-centered">Cadastro Produto</h1>

@if ($errors->any())
<div class="notification is-danger mt-2">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif

<form method="POST" action={{isset($produto->id) ?  route('produtoUpdate') : route('produtoAdd')}}>
    @csrf
    @isset($produto->id)
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="id" value="{{$produto->id}}">
    @endisset

    <p class="is-size-5 has-text-weight-light mt-5">Dados do Produto</p>

    <x-input input-label="Nome" input-name="nomeProduto" input-value="{{isset($produto->nome) ? $produto->nome : null}}"
        input-type="Text" input-required="true" />

    <x-input input-label="Descrição" input-name="descricaoProduto" input-value="{{isset($produto->descricao) ? $produto->descricao : null}}"
        input-type="Text" input-required="true" />

    <x-input input-label="Peso" input-name="pesoProduto" input-value="{{isset($produto->peso) ? $produto->peso : null}}"
        input-type="Text" input-required="true" />

    <x-input input-label="Valor" input-name="valorProduto" input-value="{{isset($produto->valor) ? $produto->valor : null}}"
        input-type="number" input-required="true" />

    <x-dropdown input-label="Tipo" input-name="tipoProduto" input-value="{{isset($produto->tipo) ? $produto->tipo : null}}"
        input-required="true">
        <option value="SERVICO" {!! isset($produto) ? ('SERVICO'==$produto->sexo ? 'selected': null):null !!}>
            Serviço
        </option>
        <option value="PRODUTO" {!! isset($produto) ? ('PRODUTO'==$produto->sexo ? 'selected': null):null !!}>
            Produto
        </option>
    </x-dropdown>

    <button class="button is-info mt-5" type="submit">{{isset($produto->id) ? 'Editar': 'Cadastrar'}} </button>
</form>
@endsection
