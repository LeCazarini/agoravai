@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Visualizar Professores
            <a class="btn btn-warning " href="{{ url('/home') }}"><i class="glyphicon glyphicon-hand-left"></i> Voltar</a>
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