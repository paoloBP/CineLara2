@extends ('adminlte::page')

@section ('content')
    <h1>Atores</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
        <th>Capacidade</th>
        <th>Numero</th>
        </thead>

        <tbody>
            @foreach($sessao as $sessao)
               <tr>
                   <td>{{$sessao->Capacidade}}</td>
                   <td>{{$sessao->Numero}}</td>
               </tr>

            @endforeach
        </tbody>
    </table>
@stop
