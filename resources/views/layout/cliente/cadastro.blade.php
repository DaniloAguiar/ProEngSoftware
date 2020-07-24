@extends('base._base')

@section('body')

<h1 class="is-size-3  has-text-weight-light has-text-centered">Cadastro Cliente</h1>

@if ($errors->any())
<div class="notification is-danger mt-2">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif


<form method='POST' action={{
    isset($cliente->id) ?  route('clienteUpdate') : route('clienteAdd')}}>

    @csrf
    @isset($cliente->id)
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="idCliente" value="{{$cliente->id}}">
    @endisset

    <x-input input-label="Email" input-name="emailCliente"
        input-value="{{isset($cliente->email) ? $cliente->email : null}}" input-type="Email" input-required="true" />
    @if(!isset($cliente->id))
    <x-input input-label="Senha" input-name="senhaCliente"
        input-value="{{isset($cliente->senha) ? $cliente->senha : null}}" input-type="Password" input-required="true" />
    @endif
    <x-input input-label="Nome" input-name="nomeCliente" input-value="{{isset($cliente->nome) ? $cliente->nome : null}}"
        input-type="Text" input-required="true" />
    <x-input input-label="CPF" input-name="CPFCliente" input-value="{{isset($cliente->cpf) ? $cliente->cpf : null}}"
        input-type="Text" input-required="true" />

    <div class="columns">
        <div class="column">
            <x-input input-label="Telefone" input-name="telefoneCliente"
                input-value="{{isset($cliente->telefone) ? $cliente->telefone : null}}" input-type="Text"
                input-required="false" />
        </div>
        <div class="column">
            <x-input input-label="Celular" input-name="celularCliente"
                input-value="{{isset($cliente->celular) ? $cliente->celular : null}}" input-type="Text"
                input-required="false" />
        </div>
    </div>

    <p class="is-size-5 has-text-weight-light">Endereço</p>
    <x-input input-label="CEP" input-name="cepCLiente" input-value="{{isset($cliente->cep) ? $cliente->cep : null}}"
        input-type="Text" input-required="true" />

    <div class="columns">
        <div class="column">
            <x-input input-label="Rua" input-name="ruaCliente"
                input-value="{{isset($cliente->rua) ? $cliente->rua : null}}" input-type="Text" input-required="true" />
        </div>
        <div class="column">
            <x-input input-label="Numero" input-name="numeroCliente"
                input-value="{{isset($cliente->numero) ? $cliente->numero : null}}" input-type="number"
                input-required="true" />
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <x-input input-label="Complemento" input-name="complementoCLiente"
                input-value="{{isset($cliente->complemento) ? $cliente->complemento : null}}" input-type="Text"
                input-required="falso" />
        </div>
        <div class="column">
            <x-input input-label="Bairro" input-name="bairroCLiente"
                input-value="{{isset($cliente->bairro) ? $cliente->bairro : null}}" input-type="Text"
                input-required="true" />
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <x-input input-label="Cidade" input-name="cidadeCLiente"
                input-value="{{isset($cliente->cidade) ? $cliente->cidade : null}}" input-type="Text"
                input-required="true" />
        </div>
        <div class="column">
            <x-input input-label="Estado" input-name="estadoCLiente"
                input-value="{{isset($cliente->estado) ? $cliente->estado : null}}" input-type="Text"
                input-required="true" />
        </div>
    </div>

    <button class="button is-info" type="submit">{{isset($cliente->id) ? 'Editar': 'Cadastrar'}} </button>
</form>
@endsection
