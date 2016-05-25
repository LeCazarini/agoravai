@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Professors / Edit #{{$professor->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('professors.update', $professor->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('nome')) has-error @endif">
                       <label for="nome-field">Nome</label>
                    <input type="text" id="nome-field" name="nome" class="form-control" value="{{ $professor->nome }}"/>
                       @if($errors->has("nome"))
                        <span class="help-block">{{ $errors->first("nome") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('idade')) has-error @endif">
                       <label for="idade-field">Idade</label>
                    <input type="text" id="idade-field" name="idade" class="form-control" value="{{ $professor->idade }}"/>
                       @if($errors->has("idade"))
                        <span class="help-block">{{ $errors->first("idade") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('area_atuacao')) has-error @endif">
                       <label for="area_atuacao-field">Area_atuacao</label>
                    <input type="text" id="area_atuacao-field" name="area_atuacao" class="form-control" value="{{ $professor->area_atuacao }}"/>
                       @if($errors->has("area_atuacao"))
                        <span class="help-block">{{ $errors->first("area_atuacao") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('professors.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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
