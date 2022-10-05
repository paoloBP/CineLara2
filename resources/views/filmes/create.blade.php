@extends('adminlte::page')

@section('content')
    <h3>Adicionar Filme</h3>

    {!! Form::open(['url'=>'filmes/store'])!!}
    
    <div class="form-group">
        {!! Form::label('titulo', 'Titulo:') !!}
        {!! Form::text('titulo', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('indicacao', 'Indicação:') !!}
        {!! Form::number('indicacao', null, ['class' => 'form-control', 'required']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('idioma', 'Idioma:') !!}
        {!! Form::text('idioma', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dublado', 'Dublado?') !!}
        {!! Form::text('dublado', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('duracao', 'Duracao:') !!}
        {!! Form::text('duracao', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Adicionar Filme', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
@stop
