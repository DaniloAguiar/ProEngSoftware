@extends('base._base')

@section('body')

<h1 class="is-size-3  has-text-weight-light has-text-centered">Cadastro Atendimento</h1>

@if ($errors->any())
<div class="notification is-danger mt-2">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif


<p class="is-size-5 has-text-weight-light">Dados do Pet</p>
<form method="POST" action={{isset($atendimento->id) ?  route('atendimentoUpdate') : route('atendimentoAdd')}}>
    @csrf
    @isset($atendimento->id)
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="id" value="{{$atendimento->id}}">
    @endisset

    <x-dropdown input-label="Pet" input-name="idPet"
        input-value="{{isset($atendimento->nome) ? $atendimento->nome : null}}" input-required="true">
        @foreach (DaoPet::all() as $pet)
        <option value={{$pet->id}} {!! isset($atendimento) ? ($pet->id == $atendimento->id_pet ? 'selected': null): null
            !!}>
            {{$pet->nome}}
        </option>
        @endforeach
    </x-dropdown>

    <p class="is-size-5 has-text-weight-light mt-5">Dados do Atendimento</p>

    <x-input input-label="Data do atendimento" input-name="dataDoAtendimento" input-type="date" input-required="true"
        input-value="{{isset($atendimento->data_do_atendimento) ? $atendimento->data_do_atendimento : null}}" />

    <button class="button is-info mt-5" type="submit">{{isset($atendimento->id) ? 'Editar': 'Cadastrar'}} </button>
</form>
@endsection
