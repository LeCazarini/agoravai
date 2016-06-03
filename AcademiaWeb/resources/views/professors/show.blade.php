@extends('layout')
@section('header')
<div class="page-header">
    <div class="well well-sm">
        <h2><i class="glyphicon glyphicon-eye-open"></i> Professor(a)</h2>
        <h2>--> {{$professor->nome}}</h2>
    </div>
        <form action="{{ route('professors.destroy', $professor->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Gostaria de excluir?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('professors.edit', $professor->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                <button type="submit" class="btn btn-danger">Excluir <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    
                    <div class="form-group">
                     <label for="nome">ID:</label>
                     <p class="form-control-static">{{$professor->id}}</p>
                </div>
                
                <div class="form-group">
                     <label for="nome">NOME</label>
                     <p class="form-control-static">{{$professor->nome}}</p>
                </div>
                    <div class="form-group">
                     <label for="idade">IDADE</label>
                     <p class="form-control-static">{{$professor->idade}}</p>
                </div>
                    <div class="form-group">
                     <label for="area_atuacao">ÁREA ATUAÇÃO</label>
                     <p class="form-control-static">{{$professor->area_atuacao}}</p>
                </div>
                <div class="well well-sm">
            <a class="btn btn-warning" href="{{ route('professors.index') }}"><i class="glyphicon glyphicon-hand-left"></i> Voltar</a>
                </div>
            </form>
        </div>
    </div>

@endsection