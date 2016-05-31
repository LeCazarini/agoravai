@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Alunos
            <a class="btn btn-success pull-right" href="{{ route('alunos.create') }}"><i class="glyphicon glyphicon-plus"></i> Adicionar Aluno</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($alunos->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                        <th>IDADE</th>
                        <th>PESO INCIAL</th>
                        <th>PESO FINAL</th>
                        <th>ID PROFESSOR</th>
                            <th class="text-right">OPÇÕES</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($alunos as $aluno)
                            <tr>
                                <td>{{$aluno->id}}</td>
                                <td>{{$aluno->nome}}</td>
                    <td>{{$aluno->idade}}</td>
                    <td>{{$aluno->peso_incial}}</td>
                    <td>{{$aluno->peso_final}}</td>
                    <td>{{$aluno->id_professor}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('alunos.show', $aluno->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Visualizar</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('alunos.edit', $aluno->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $alunos->render() !!}
            @else
                <h3 class="text-center alert alert-info">Lista Vazia!</h3>
            @endif

        </div>
    </div>

@endsection