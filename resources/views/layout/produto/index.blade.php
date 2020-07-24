@extends('base._base')

@section('body')
<h1 class="is-size-3  has-text-weight-light has-text-centered">Todos Produto</h1>

<div class="table-container">
    <table class="table is-fullwidth is-hoverable">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Peso</th>
                <th>Tipo</th>
                <th>Valor</th>
                <th colspan="2"><a href={{route('produtoShow')}}> <i class="fas fa-plus"></i></a></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <th>{{$produto->id}}</th>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->peso}}</td>
                <td>{{$produto->tipo}}</td>
                <td>{{$produto->valor}}</td>

                <td>
                    <a class="button is-light has-text-success" href={{route('produtoShow', [$produto->id])}}>
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                </td>
                <td>
                    <form method='POST' action={{route('produtoDeletar')}}>
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="idProduto" value="{{$produto->id}}">

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
                <th>{{$produtos->count()}}</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>

    </table>

</div>


@endsection
