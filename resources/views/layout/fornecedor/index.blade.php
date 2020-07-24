@extends('base._base')

@section('body')
<h1 class="is-size-3  has-text-weight-light has-text-centered">Todos Fornecedor</h1>

<div class="table-container">
    <table class="table is-fullwidth is-hoverable">
        <thead>
            <tr>
                <th>#</th>
                <th>Razão Social</th>
                <th>CNPJ</th>
                <th colspan="2"><a href={{route('fornecedorShow')}}> <i class="fas fa-plus"></i></a></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($fornecedores as $fornecedor)
            <tr>
                <td>{{$fornecedor->id}}</td>
                <td>{{$fornecedor->razaosocial}}</td>
                <td>{{$fornecedor->cnpj}}</td>
                <td>
                    <a class="button is-light has-text-success" href={{route('fornecedorShow', [$fornecedor->id])}}>
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                </td>
                <td>
                    <form method='POST' action={{route('fornecedorDeletar')}}>
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="idfornecedor" value="{{$fornecedor->id}}">

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
                <th>{{$fornecedores->count()}}</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>

    </table>

</div>


@endsection
