@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <div class="well well-sm">
        <h2><i class="glyphicon glyphicon-edit"></i> Editar {{$professor->nome}}</h2>
    </div>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-15">

            <form action="{{ route('professors.update', $professor->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('nome')) has-error @endif">
                       <label for="nome-field">NOME</label>
                    <input type="text" id="nome-field" name="nome" class="form-control" value="{{ $professor->nome }}"/>
                       @if($errors->has("nome"))
                        <span class="help-block">{{ $errors->first("nome") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('idade')) has-error @endif">
                       <label for="idade-field">IDADE</label>
                    <input type="text" id="idade-field" name="idade" class="form-control" value="{{ $professor->idade }}"/>
                       @if($errors->has("idade"))
                        <span class="help-block">{{ $errors->first("idade") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('area_atuacao')) has-error @endif">
                       <label for="area_atuacao-field">ÁREA ATUAÇÃO</label>
                    <input type="text" id="area_atuacao-field" name="area_atuacao" class="form-control" value="{{ $professor->area_atuacao }}"/>
                       @if($errors->has("area_atuacao"))
                        <span class="help-block">{{ $errors->first("area_atuacao") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Salvar</button>
                    <a class="btn btn-warning pull-right" href="{{ route('professors.index') }}"><i class="glyphicon glyphicon-hand-left"></i> Voltar</a>
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
