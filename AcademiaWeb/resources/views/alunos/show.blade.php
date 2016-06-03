@extends('layout')

@section('header')
<div class="page-header">
    <div class="well well-sm">
        <h2><i class="glyphicon glyphicon-eye-open"></i> Aluno(a)</h2>
        <h2>--> {{$aluno->nome}}</h2>
    </div>
        <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Deseja deletar esse aluno?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('alunos.edit', $aluno->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                <button type="submit" class="btn btn-danger">Deletar <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$aluno->id}}</p>
                    
                </div>
                <div class="form-group">
                     <label for="nome">NOME</label>
                     <p class="form-control-static">{{$aluno->nome}}</p>
                </div>
                    <div class="form-group">
                     <label for="idade">IDADE</label>
                     <p class="form-control-static">{{$aluno->idade}}</p>
                </div>
                    <div class="form-group">
                     <label for="peso_incial">PESO INCIAL</label>
                     <p class="form-control-static">{{$aluno->peso_incial}}</p>
                </div>
                    <div class="form-group">
                     <label for="peso_final">PESO FINAL</label>
                     <p class="form-control-static">{{$aluno->peso_final}}</p>
                </div>
                    <div class="form-group">
                     <label for="id_professor">ID PROFESSOR</label>
                     <p class="form-control-static">{{$aluno->id_professor}}</p>
                </div>
            </form>

            <a class="btn btn-primary" href="{{ route('alunos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>

        </div>
    </div>

@endsection