@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('CineLara') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bem vindo') }}
                        <br>
                        <a href="{{ url('/home/atores') }}" class="btn btn-xs btn-info pull-right">Acessar Menu</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
