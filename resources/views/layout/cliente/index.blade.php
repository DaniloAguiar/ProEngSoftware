@extends('base._base')

@section('body')
<h1 class="is-size-3  has-text-weight-light has-text-centered">Todos Clientes</h1>


<div class="table-container">
    <table class="table is-fullwidth is-hoverable">
        <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Celular</th>
                <td colspan="2"><a href={{route('clienteShow')}}> <i class="fas fa-plus"></i></a></td>
            </tr>
        </thead>

        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <th>{{$cliente->id}}</th>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->telefone}}</td>
                <td>{{$cliente->celular}}</td>

                <td>
                    <a class="button is-light has-text-success" href={{route('clienteShow', [$cliente->id])}}>
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                </td>
                <td>
                    <form method='POST' action={{route('clienteDeletar')}}>
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="idCliente" value="{{$cliente->id}}">

                        <button class="button is-light has-text-danger" type="submit">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

        <tfoot>
            <tr>
                <th>total</th>
                <th>{{$clientes->count()}}</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>

    </table>

</div>


@endsection
