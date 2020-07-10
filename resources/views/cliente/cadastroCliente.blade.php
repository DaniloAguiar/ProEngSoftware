@extends('base._base')

@section('body')
{{-- hsl(204, 86%, 53%) --}}

<h1 class="is-size-3  has-text-weight-light has-text-centered">Cadastro Cliente</h1>
<p class="is-size-5 has-text-weight-light">Dados do Cliente</p>

<form method="POST" action={{route('adicionarCliente')}}>
    @csrf

    <div class="input-container mt-3">
        <input class="input " name="emailCliente" id="emailCliente" type="text" value=""
            onkeyup="this.setAttribute('value', this.value);" required="">
        <label class="label" for="emailCliente">
            Email*
        </label>
    </div>

    <div class="input-container mt-3">
        <input class="input " name="senhaCliente" id="senhaCliente" type="password" value=""
            onkeyup="this.setAttribute('value', this.value);" required="">
        <label class="label" for="senhaCliente">
            Senha*
        </label>
    </div>

    <div class="input-container mt-3">
        <input class="input " name="nomeCliente" id="nomeCliente" type="text" value=""
            onkeyup="this.setAttribute('value', this.value);" required="">
        <label class="label" for="nomeCliente">
            Nome*
        </label>
    </div>

    <div class="input-container mt-3">
        <input class="input " name="CPFCliente" id="CPFCliente" type="text" value=""
            onkeyup="this.setAttribute('value', this.value);" required="">
        <label class="label" for="CPFCliente">
            CPF*
        </label>
    </div>

    <div class="columns">
        <div class="column">
            <div class="input-container mt-3">
                <input class="input " name="telefoneCliente" id="telefoneCliente" type="text" value=""
                    onkeyup="this.setAttribute('value', this.value);" required="">
                <label class="label" for="telefoneCliente">
                    Telefone*
                </label>
            </div>
        </div>
        <div class="column">
            <div class="input-container  mt-3">
                <input class="input " name="celularCliente" id="celularCliente" type="text" value=""
                    onkeyup="this.setAttribute('value', this.value);" required="">
                <label class="label" for="celularCliente">
                    Celular*
                </label>
            </div>
        </div>
    </div>

    <p class="is-size-5 has-text-weight-light">Endereço</p>

    <div class="input-container mt-3">
        <input class="input " name="cepCliente" id="cepCliente" type="text" value=""
            onkeyup="this.setAttribute('value', this.value);" required="">
        <label class="label" for="cepCliente">
            CEP
        </label>
    </div>

    <div class="columns">
        <div class="column">Rua</div>
        <div class="column">Numero</div>
    </div>

    <div class="columns">
        <div class="column">Complemento</div>
        <div class="column">Bairro</div>
    </div>

    <div class="columns">
        <div class="column">Cidade</div>
        <div class="column">Estado</div>
    </div>

    <button class="button is-info" type="submit">Cadastrar</button>
</form>

@endsection
