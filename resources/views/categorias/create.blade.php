@extends('adminlte::page')

@section('content')
    <h3>Nova Categoria</h3>

    {!! Form::open(['url'=>'categorias/store']) !!}

    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
            {!! Form::label('descricao', 'Descrição:') !!}
            {!! Form::text('descricao', null, ['class' => 'form-control', 'required']) !!}
        </div>

    <div class="form-group">
        {!! Form::submit('Criar Categoria', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
@stop
