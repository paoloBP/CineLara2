@extends ('adminlte::page')

@section ('content')
    <h1>Salas (Sessões)</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>

        <th>Filme</th>
        <th>Capacidade</th>
        <th>Número da Sala</th>
        <th>Indicação</th>
        <th>Horário de início</th>
        </thead>

        <tbody>
            @foreach($sessao as $sessao)
               <tr>
                   <td>{{$sessao->Capacidade}}</td>
                   <td>{{$sessao->Numero}}</td>
                   <td>{{$sessao->Indicacao}}</td>
                   <td>{{$sessao->Horario}}</td>
               </tr>

            @endforeach
        </tbody>
    </table>
@stop
