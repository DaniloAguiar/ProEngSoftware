@extends('base._base')

@section('body')
<h1 class="is-size-3  has-text-weight-light has-text-centered">Todos Pet</h1>

<div class="table-container">
    <table class="table is-fullwidth is-hoverable">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Raça</th>
                <th>idade</th>
                <td colspan="2"><a href={{route('petShow')}}> <i class="fas fa-plus"></i></a></td>
            </tr>
        </thead>

        <tbody>
            @foreach ($pets as $pet)
            <tr>
                <th>{{$pet->id}}</th>
                <td>{{$pet->nome}}</td>
                <td>{{$pet->raca}}</td>
                <td>{{$pet->idade}}</td>

                <td>
                    <a class="button is-light has-text-success" href={{route('petShow', [$pet->id])}}>
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                </td>
                <td>
                    <form method='POST' action={{route('petDeletar')}}>
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="idPet" value="{{$pet->id}}">

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
                <th>{{$pets->count()}}</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>

    </table>

</div>


@endsection
