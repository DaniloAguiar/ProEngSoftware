@extends('base._base')

@section('body')
{{-- hsl(204, 86%, 53%) --}}

<div class="columns is-mobile is-centered">
    <div class="column is-half">
        <h1 class="is-size-3  has-text-weight-light has-text-centered">Login</h1>

        <form method="POST" action={{route('conectarUsuario')}}>
            @if($errors->any())
            <p class="has-text-danger"> {{$errors->first()}} </p>
            @endif

            @csrf

            <x-input input-label="Email" input-name="emailUsuario" input-value="" input-type="Email"
                input-required="true" />

            <x-input input-label="Senha" input-name="senhaUsuario" input-value="" input-type="Password"
                input-required="true" />

            <div class=" columns">
                <div class="column">
                    <button class="button is-info mt-5" type="submit">Entrar </button>
                </div>

                <div class="column is-narrow">
                    <a class="button is-text mt-5" href={{route('clienteShow')}}>Registrar-se</a>
                </div>

            </div>
        </form>
    </div>
</div>

@endsection
