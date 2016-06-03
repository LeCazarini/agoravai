@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Professores
           
            <a class="btn btn-warning pull-right" href="{{ route('professors.create') }}"><i class="glyphicon glyphicon-plus"></i> Adicionar Professor</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($professors->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                        <th>IDADE</th>
                        <th>AREA ATUAÇÃO</th>
                            <th class="text-right">OPÇÕES</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($professors as $professor)
                            <tr>
                                <td>{{$professor->id}}</td>
                                <td>{{$professor->nome}}</td>
                    <td>{{$professor->idade}}</td>
                    <td>{{$professor->area_atuacao}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('professors.show', $professor->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Visualizar</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('professors.edit', $professor->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                    <form action="{{ route('professors.destroy', $professor->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Gostaria de deletar esse professor?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $professors->render() !!}
            @else
                <h3 class="text-center alert alert-info">Lista Vazia</h3>
            @endif
                        <div class="well well-sm">
                    <a class="btn btn-warning " href="{{ url('/home') }}"><i class="glyphicon glyphicon-hand-left"></i> Voltar</a>
                </div>
        </div>
    </div>

@endsection