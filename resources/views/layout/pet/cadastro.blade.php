@extends('base._base')

@section('body')

<h1 class="is-size-3  has-text-weight-light has-text-centered">Cadastro Pet</h1>

@if ($errors->any())
<div class="notification is-danger mt-2">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif


<p class="is-size-5 has-text-weight-light">Dados do Cliente</p>
<form method="POST" action={{isset($pet->id) ?  route('petUpdate') : route('petAdd')}}>
    @csrf
    @isset($pet->id)
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="id" value="{{$pet->id}}">
    @endisset

    <x-dropdown input-label="Dono" input-name="idCliente" input-value="{{isset($pet->nome) ? $pet->nome : null}}"
        input-required="true">
        @foreach (DaoCliente::all() as $cliente)
        <option value={{$cliente->id}} {!! isset($pet) ? ($cliente->id == $pet->id_cliente ? 'selected': null): null
            !!}>
            {{$cliente->nome}}
        </option>
        @endforeach
    </x-dropdown>

    <p class="is-size-5 has-text-weight-light mt-5">Dados do Pet</p>

    <x-input input-label="Nome" input-name="nomePet" input-value="{{isset($pet->nome) ? $pet->nome : null}}"
        input-type="Text" input-required="true" />

    <x-input input-label="Raça" input-name="racaPet" input-value="{{isset($pet->raca) ? $pet->raca : null}}"
        input-type="Text" input-required="true" />

    <x-input input-label="Peso" input-name="pesoPet" input-value="{{isset($pet->peso) ? $pet->peso : null}}"
        input-type="Text" input-required="true" />

    <x-input input-label="Idade" input-name="idadePet" input-value="{{isset($pet->idade) ? $pet->idade : null}}"
        input-type="number" input-required="true" />

    <x-dropdown input-label="Sexo" input-name="sexoPet" input-value="{{isset($pet->nome) ? $pet->nome : null}}"
        input-required="true">
        <option value="MASCULINO" {!! isset($pet) ? ('MASCULINO'==$pet->sexo ? 'selected': null):null !!}>
            Masculino
        </option>
        <option value="FEMININO" {!! isset($pet) ? ('FEMININO'==$pet->sexo ? 'selected': null):null !!}>
            Feminino
        </option>
    </x-dropdown>

    <button class="button is-info mt-5" type="submit">{{isset($pet->id) ? 'Editar': 'Cadastrar'}} </button>
</form>
@endsection
