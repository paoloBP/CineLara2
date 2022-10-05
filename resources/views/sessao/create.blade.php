@extends('adminlte::page')

@section('content')
    <h3>Nova Sessão</h3>

    {!! Form::open(['url'=>'sessao/store'])!!}
    
    <div class="form-group">
        {!! Form::label('Capacidade', 'Capacidade:') !!}
        {!! Form::number('Capacidade', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Capacidade', 'Capacidade:') !!}
        {!! Form::number('Capacidade', null, ['class' => 'form-control', 'required']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('Numero', 'Número da Sala:') !!}
        {!! Form::text('Numero', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Indicacao', 'Indicação:') !!}
        {!! Form::text('Indicacao', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Horario', 'Horário:') !!}
        {!! Form::text('Horario', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Criar Sessao', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
@stop
