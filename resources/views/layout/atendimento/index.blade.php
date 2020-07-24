@extends('base._base')

@section('body')
<h1 class="is-size-3  has-text-weight-light has-text-centered">Todos atendimento</h1>

<div class="table-container">
    <table class="table is-fullwidth is-hoverable">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome Pet</th>
                <th>Data do Atendimento</th>
                <th colspan="2"><a href={{route('atendimentoShow')}}> <i class="fas fa-plus"></i></a></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($atendimentos as $atendimento)
            <tr>
                <th>{{$atendimento->id}}</th>
                <td>{{$atendimento->nome}}</td>
                <td>{{$atendimento->data_do_atendimento}}</td>

                <td>
                    <a class="button is-light has-text-success" href={{route('atendimentoShow', [$atendimento->id])}}>
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                </td>
                <td>
                    <form method='POST' action={{route('atendimentoDeletar')}}>
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="idatendimento" value="{{$atendimento->id}}">

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
                <th>{{$atendimentos->count()}}</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>

    </table>


</div>


@endsection
