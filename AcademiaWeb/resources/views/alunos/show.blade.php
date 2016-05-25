@extends('layout')
@section('header')
<div class="page-header">
        <h1>Alunos / Show #{{$aluno->id}}</h1>
        <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('alunos.edit', $aluno->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
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
                    <p class="form-control-static"></p>
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
                     <label for="peso_incial">PESO_INCIAL</label>
                     <p class="form-control-static">{{$aluno->peso_incial}}</p>
                </div>
                    <div class="form-group">
                     <label for="peso_final">PESO_FINAL</label>
                     <p class="form-control-static">{{$aluno->peso_final}}</p>
                </div>
                    <div class="form-group">
                     <label for="id_professor">ID_PROFESSOR</label>
                     <p class="form-control-static">{{$aluno->id_professor}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('alunos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection