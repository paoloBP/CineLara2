@extends ('adminlte::page')

@section ('content')
    <h1>Atores</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        </thead>

        <tbody>
            @foreach($atores as $ator)
               <tr>
                   <td>{{$ator->nome}}</td>
                   <td>{{Carbon\Carbon::parse ($ator->dt_nascimento)->format('d/m/Y')}}</td>
                   <th>Ações</th>
               </tr>

               <td>
                <a href="{{route('atores.edit', [ 'id'=>$ator->id])}}" class="btn-sm btn-success"> Editar</a>

                <a href="{{route('atores.edit', [ 'id'=>$ator->id])}}" class="btn-sm btn-success"> Remover</a>
               </td>

            @endforeach
        </tbody>
    </table>

@stop
