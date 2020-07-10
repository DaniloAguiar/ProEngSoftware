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
                <th>CPF</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>CEP</th>
                <td colspan="2"><a href={{route('showCadastroCliente')}}> <i class="fas fa-plus"></i> Novo Cliente</a></td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th>1</th>
                <td>danilofernandesdeaguiar@gmail.com</td>
                <td>Danilo Fernandes de Aguiar</td>
                <td>999.999.999-99</td>
                <td>(99) 99999-9999</td>
                <td>(99) 9 99999-9999</td>
                <td>99999-999</td>

                <td><a href={{route('showCadastroCliente')}}><i class="fas fa-pencil-alt"></i></a></td>
                <td><a href={{route('showCadastroCliente')}}><i class="fas fa-trash-alt"></i></a></td>
            </tr>
        </tbody>


        <tfoot>
            <tr>
                <th>total</th>
                <th>18</th>
                <th></th>
                <th></th>
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
