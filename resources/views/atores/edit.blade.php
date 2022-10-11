@extends('adminlte::page')

@section('content')
    <h3>Editando Ator : {{$ator->nome}} </h3>

    {!! Form::open(['route'=>'atores/$ator->id/update', 'method'=>'put'])!!}

    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', $ator->nome, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('nacionalidade', 'Nacionalidade:') !!}
        {!! Form::select('nacionalidade',
                        array('BRA'=>'Brasileiro',
                              'USA'=>'Americano',
                              'CAN'=>'Canadense',
                              'ARG'=>'Argentino'),
                              $ator->nacionalidade, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dt_nascimento', 'Data de Nascimento:') !!}
        {!! Form::date('dt_nascimento', $ator->dt_nascimento, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('inicio_atividades', 'início das Atividades:') !!}
        {!! Form::date('inicio_atividades', $ator->inicio_atividades, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar Ator', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
@stop
