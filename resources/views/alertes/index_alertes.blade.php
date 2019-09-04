@extends('layouts.app')

@section('content')
    <h1>Alertes</h1>
    <ul class = "list-group">
        @if(count($llista_alertes) > 0)
            @foreach($llista_alertes as $alerta)
                <div class = "well">
                    <h4> <li class = "list-group-item">
                    <u>Incidencia {{$alerta->id_incidencia}} amb data {{$alerta->data_incidencia}}</u>
                    <h6>{{$alerta->incidencia}}</h6>
                    <a>
                    {!!Form::open(['action' => ['LogsController@destroy', $alerta->id_incidencia], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Esborrar', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                    </a>

                    </li> </h4>
                </div>

            @endforeach
        @else
            <p>Actualment no hi ha alertes</p>
        @endif
    </ul>
@endsection
