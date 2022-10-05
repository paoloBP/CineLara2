@extends ('adminlte::page')

@section ('content')
    <h1>Filmes (Catálogo)</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>

        <th>Titulo do filme:</th>
        <th>Indicação Etária:</th>
        <th>Idioma de origem:</th>
        <th>Dublado?</th>
        <th>Duração total do filem:</th>
        </thead>

        <tbody>
            @foreach($filmes as $filmes)
               <tr>
                   <td>{{$filmes->titulo}}</td>
                   <td>{{$filmes->indicacao}}</td>
                   <td>{{$filmes->idioma}}</td>
                   <td>{{$filmes->dublado}}</td>
                   <td>{{$filmes->duracao}}</td>
               </tr>

            @endforeach
        </tbody>
    </table>
@stop
