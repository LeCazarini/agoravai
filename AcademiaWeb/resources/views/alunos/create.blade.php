@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Alunos / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('alunos.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('nome')) has-error @endif">
                       <label for="nome-field">Nome</label>
                    <input type="text" id="nome-field" name="nome" class="form-control" value="{{ old("nome") }}"/>
                       @if($errors->has("nome"))
                        <span class="help-block">{{ $errors->first("nome") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('idade')) has-error @endif">
                       <label for="idade-field">Idade</label>
                    <input type="text" id="idade-field" name="idade" class="form-control" value="{{ old("idade") }}"/>
                       @if($errors->has("idade"))
                        <span class="help-block">{{ $errors->first("idade") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('peso_incial')) has-error @endif">
                       <label for="peso_incial-field">Peso_incial</label>
                    <input type="text" id="peso_incial-field" name="peso_incial" class="form-control" value="{{ old("peso_incial") }}"/>
                       @if($errors->has("peso_incial"))
                        <span class="help-block">{{ $errors->first("peso_incial") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('peso_final')) has-error @endif">
                       <label for="peso_final-field">Peso_final</label>
                    <input type="text" id="peso_final-field" name="peso_final" class="form-control" value="{{ old("peso_final") }}"/>
                       @if($errors->has("peso_final"))
                        <span class="help-block">{{ $errors->first("peso_final") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('id_professor')) has-error @endif">
                       <label for="id_professor-field">Id_professor</label>
                    <input type="text" id="id_professor-field" name="id_professor" class="form-control" value="{{ old("id_professor") }}"/>
                       @if($errors->has("id_professor"))
                        <span class="help-block">{{ $errors->first("id_professor") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('alunos.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
