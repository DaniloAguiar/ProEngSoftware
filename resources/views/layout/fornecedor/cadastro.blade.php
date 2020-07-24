@extends('base._base')

@section('body')

<h1 class="is-size-3  has-text-weight-light has-text-centered">Cadastro Fornecedor</h1>

@if ($errors->any())
<div class="notification is-danger mt-2">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif


<p class="is-size-5 has-text-weight-light">Dados do Cliente</p>
<form method="POST" action={{isset($fornecedor->id) ?  route('fornecedorUpdate') : route('fornecedorAdd')}}>
    @csrf
    @isset($fornecedor->id)
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="id" value="{{$fornecedor->id}}">
    @endisset

    <x-input input-label="Razao Social" input-name="razaoSocialFornecedor"
        input-value="{{isset($fornecedor->razaosocial) ? $fornecedor->razaosocial : null}}" input-type="Text" input-required="true" />

    <x-input input-label="CNPJ" input-name="CNPJFornecedor"
        input-value="{{isset($fornecedor->cnpj) ? $fornecedor->cnpj : null}}" input-type="Text" input-required="true" />

    <button class="button is-info mt-5" type="submit">{{isset($fornecedor->id) ? 'Editar': 'Cadastrar'}} </button>
</form>
@endsection
